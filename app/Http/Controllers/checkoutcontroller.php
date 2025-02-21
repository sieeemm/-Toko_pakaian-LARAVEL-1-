<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Pastikan model Order sudah ada
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        // Ambil data produk dari keranjang
        // Misalnya mengambil data dari session (anda bisa menyesuaikan dengan implementasi keranjang anda)
        $cart = session()->get('cart', []);

        // Tampilkan halaman checkout
        return view('checkout', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        // Validasi data
        $request->validate([
            'address' => 'required|string',
            'payment_method' => 'required|string',
            // Bisa menambahkan validasi untuk 'total' jika diperlukan
            'total' => 'required|numeric',
        ]);

        // Buat order baru
        $order = new Order();
        $order->user_id = Auth::id(); // Menggunakan Auth untuk mengambil ID user yang sedang login
        $order->address = $request->address; // Simpan alamat
        $order->payment_method = $request->payment_method; // Simpan metode pembayaran
        $order->total = $request->total; // Total dari keranjang
        $order->status = 'pending'; // Misalnya status awal order adalah pending
        $order->save();

        // Opsional: Kosongkan keranjang setelah checkout
        session()->forget('cart');

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('home')->with('success', 'Order berhasil dibuat!');
    }
}
