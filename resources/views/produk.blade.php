<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STONE ISLAND</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 min-h-screen flex flex-col">
  <header class="bg-gray-700 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">STONE ISLAND</h1>
  </header>
  <nav class="bg-gray-600 p-3 text-center">
    <a href="home" class="text-white px-4">HOME</a>
    <a href="#" class="text-white px-4">TENTANG</a>
    <a href="produk" class="text-white px-4">PRODUK</a>
    <a href="login" class="text-white px-4">LOGIN</a>
    <a href="#" class="text-white px-4">CHECK OUT</a>
  </nav>

  <main class="p-6 flex-1">
    <h2 class="text-2xl font-semibold mb-6 text-center">Daftar Produk</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/8.png') }}" alt="Produk 1" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 1</h3>
        <p class="mb-2">Deskripsi singkat produk 1.</p>
        <p class="font-semibold text-lg mb-2">Rp 500.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/7.png') }}" alt="Produk 2" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 2</h3>
        <p class="mb-2">Deskripsi singkat produk 2.</p>
        <p class="font-semibold text-lg mb-2">Rp 600.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/6.png') }}" alt="Produk 3" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 3</h3>
        <p class="mb-2">Deskripsi singkat produk 3.</p>
        <p class="font-semibold text-lg mb-2">Rp 550.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/5.png') }}" alt="Produk 4" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 4</h3>
        <p class="mb-2">Deskripsi singkat produk 4.</p>
        <p class="font-semibold text-lg mb-2">Rp 700.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/4.png') }}" alt="Produk 5" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 5</h3>
        <p class="mb-2">Deskripsi singkat produk 5.</p>
        <p class="font-semibold text-lg mb-2">Rp 800.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/3.png') }}" alt="Produk 6" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 6</h3>
        <p class="mb-2">Deskripsi singkat produk 6.</p>
        <p class="font-semibold text-lg mb-2">Rp 750.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/2.png') }}" alt="Produk 7" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 7</h3>
        <p class="mb-2">Deskripsi singkat produk 7.</p>
        <p class="font-semibold text-lg mb-2">Rp 650.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
      <div class="bg-white p-4 shadow-md rounded-lg">
        <img src="{{ asset('images/1.png') }}" alt="Produk 8" class="w-full mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 8</h3>
        <p class="mb-2">Deskripsi singkat produk 8.</p>
        <p class="font-semibold text-lg mb-2">Rp 900.000</p>
        <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
      </div>
    </div>
  </main>

  <footer class="bg-gray-700 text-white p-4 text-center">
    &copy; 2025 STONE ISLAND. LARAVEL 1.
  </footer>
</body>
</html>
