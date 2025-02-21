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
    <div id="cart" class="mt-2">Keranjang: <span id="cart-count">0</span> item</div>
  </header>
  <nav class="bg-gray-600 p-3 text-center">
    <h1></h1>
    <nav>
        <ul>
            <button><a href="home"><li>KEMBALI</li></a></button>  
            <button><a href="/jacket"><li>jacket</li></a></button>
            <button><a href="#"><li>KAOS</li</a></button>
            <button><a href="#"><li>CELANA</li></a></button>
            <button><a href="#"><li>SEPATU</li></a></button>
           <button type="submit"><a href="keranjang"><li><img src="images/l.png" style="width: 25px; float:right ;" ></li></a></button>
            
          
          
        </ul>
    </nav>

  </nav>

  <style>
      .bg-gray-600 p-3 text-center {
        
      }

      nav ul {
      list-style-type: none;
      padding: 0;
  }

    nav ul li {
    display: inline;
    margin: 0 15px;
    font-weight: bold;
    cursor: pointer;
}
  </style>

<main class="p-6 flex-1">
  <h2 class="text-2xl font-semibold mb-6 text-center">Daftar Produk</h2>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white p-4 shadow-md rounded-lg">
      <img src="{{ asset('images/00.jpeg') }}" alt="Produk 1" class="w-full mb-4 rounded">
      <h3 class="text-xl font-bold mb-2">stone island nylon metal jacket</h3>
      <p class="font-semibold text-lg mb-2">Rp 500.000</p>
      <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="addToCart()">Beli</button>
    </div>
    <div class="bg-white p-4 shadow-md rounded-lg">
      <img src="{{ asset('images/11.jpeg') }}" alt="Produk 2" class="w-full mb-4 rounded">
      <h3 class="text-xl font-bold mb-2">stone island hand corossion jacket</h3>
      <p class="font-semibold text-lg mb-2">Rp 600.000</p>
      <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="addToCart()">Beli</button>
    </div>
    <div class="bg-white p-4 shadow-md rounded-lg">
      <img src="{{ asset('images/01.jpeg') }}" alt="Produk 3" class="w-full mb-4 rounded">
      <h3 class="text-xl font-bold mb-2">stone island painted camouflage jacket</h3>
      <p class="font-semibold text-lg mb-2">Rp 550.000</p>
      <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="addToCart()">Beli</button>
    </div>
    <div class="bg-white p-4 shadow-md rounded-lg">
      <img src="{{ asset('images/02.jpeg') }}" alt="Produk 4" class="w-full mb-4 rounded">
      <h3 class="text-xl font-bold mb-2">Stone Island Heat Reactive Jacket</h3>
      <p class="font-semibold text-lg mb-2">Rp 700.000</p>
      <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600" onclick="addToCart()">Beli</button>
    </div>
  </div>
</main>

  <footer class="bg-gray-700 text-white p-4 text-center">
    &copy; 2025 STONE ISLAND. LARAVEL 1.
  </footer>

  <script>
    let cartCount = 0;

    function addToCart() {
      cartCount++;
      document.getElementById('cart-count').innerText = cartCount;
      alert('Produk telah ditambahkan ke keranjang!');
    }
  </script>
</body>
</html>
