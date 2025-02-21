<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/kembali', function () {
    return view('welcome');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/jacket', function () {
    return view('jacket');
});
Route::get('/kaos', function () {
    return view('kaos');
});
Route::get('/celana', function () {
    return view('celana');
});
Route::get('/sepatu', function () {
    return view('sepatu');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

use App\Http\Controllers\CheckoutController;

Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
    Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
});
