<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout - STONE ISLAND</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen flex flex-col">
  <header class="bg-gray-700 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Checkout</h1>
  </header>

  <main class="p-6 flex-1">
    <h2 class="text-2xl font-semibold mb-6">Daftar Produk</h2>
    <div class="bg-white p-4 shadow-md rounded-lg mb-6">
      <div class="flex justify-between border-b pb-2 mb-2">
        <span>stone island nylon metal jacket</span>
        <span>Rp 500.000</span>
      </div>
      <div class="flex justify-between border-b pb-2 mb-2">
        <span>stone island hand corossion jacket</span>
        <span>Rp 600.000</span>
      </div>
      <div class="flex justify-between border-b pb-2 mb-2">
        <span>stone island painted camouflage jacket</span>
        <span>Rp 550.000</span>
      </div>
      <div class="flex justify-between border-b pb-2 mb-2">
        <span>Stone Island Heat Reactive Jacket</span>
        <span>Rp 700.000</span>
      </div>
      <div class="flex justify-between font-bold mt-2">
        <span>Total</span>
        <span>Rp 2.350.000</span>
      </div>
    </div>

    <h2 class="text-2xl font-semibold mb-6">Informasi Pengiriman</h2>
    <form class="bg-white p-4 shadow-md rounded-lg">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
        <input type="text" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200" required>
      </div>
      <div class="mb-4">
        <label for="address" class="block text-sm font-medium text-gray-700">Alamat Pengiriman</label>
        <textarea id="address" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200" required></textarea>
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
        <input type="tel" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring focus:ring-gray-200" required>
      </div>
      <button type="submit" class="w-full bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Konfirmasi Pembelian</button>
    </form>
  </main>

  <footer class="bg-gray-700 text-white p-4 text-center">
    &copy; 2025 STONE ISLAND. LARAVEL 1.
  </footer>
</body>
</html>