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
    <h1 class="text-3xl font-bold">TSHIRT STONE ISLAND</h1>
  </header>
  <nav class="bg-gray-600 p-3 text-center">
    <ul>
        <button><a href="/produk"><li>kembali</li></a></button>  
        <button><a href="/jacket"><li>jacket</li></a></button>
        <button><a href="/kaos"><li>kaos</li</a></button>
        <button><a href="celana"><li>CELANA</li></a></button>
        <button><a href="#"><li>SEPATU</li></a></button>
    </ul>
    
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

</nav>
    
    <main class="p-6 flex-1">
      <h2 class="text-2xl font-semibold mb-6 text-center">MY TSHIRT COLLECTION</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-4 shadow-md rounded-lg">
          <img src="{{ asset('images/00.jpeg') }}" alt="Produk 1" class="w-full mb-4 rounded">
          <h3 class="text-xl font-bold mb-2">stone island nylon metal jacket</h3>
          <p class="font-semibold text-lg mb-2">Rp 500.000</p>
          <button class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Beli</button>
    </main>
        </div>