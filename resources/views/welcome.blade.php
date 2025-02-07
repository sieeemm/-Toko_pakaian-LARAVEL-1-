<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            background-color: #f3f4f6;
        }
        header {
            background-color: #2563eb;
            color: white;
            padding: 16px;
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-button {
            background-color: #ffffff;
            color: #2563eb;
            padding: 8px 16px;
            border-radius: 4px;
            margin-right: 16px;
            font-weight: bold;
        }
        .product-card {
            background-color: white;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            border-radius: 8px;
        }
        .buy-button {
            margin-top: 8px;
            background-color: #3b82f6;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <header>
        <span>ELLYSIAN SHOP</span>
        <button class="login-button">Login</button>
    </header>
    <main class="p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- 10 Produk -->
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 1">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 1</h2>
                <p class="text-gray-600">Rp 100000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 2">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 2</h2>
                <p class="text-gray-600">Rp 200000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 3">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 3</h2>
                <p class="text-gray-600">Rp 300000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 4">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 4</h2>
                <p class="text-gray-600">Rp 400000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 5">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 5</h2>
                <p class="text-gray-600">Rp 500000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 6">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 6</h2>
                <p class="text-gray-600">Rp 600000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 7">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 7</h2>
                <p class="text-gray-600">Rp 700000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 8">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 8</h2>
                <p class="text-gray-600">Rp 800000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 9">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 9</h2>
                <p class="text-gray-600">Rp 900000</p>
                <button class="buy-button">Beli</button>
            </div>
            <div class="product-card">
                <img src="images/jersey.jpeg.jpeg" alt="Produk 10">
                <h2 class="text-lg font-semibold mt-2">Nama Produk 10</h2>
                <p class="text-gray-600">Rp 1000000</p>
                <button class="buy-button">Beli</button>
            </div>
        </div>
    </main>
</body>
</html>