<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STONE ISLAND</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-200">
    <header class="bg-gray-700 text-white p-4 text-center">
        <h1 class="text-3xl font-bold">STONE ISLAND</h1>
    </header>

    <nav class="bg-gray-600 p-3 text-center">
        <a href="home" class="text-white px-4">HOME</a>
        <a href="#" class="text-white px-4">TENTANG</a>
        <a href="produk" class="text-white px-4">PRODUK</a>
        <a href="login" class="text-white px-4">LOGIN</a>
    </nav>

    <main class="p-6">
        <section class="bg-white shadow-md p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">Selamat Datang!</h2>
            <p>Ini adalah halaman depan website kami. Jelajahi berbagai informasi menarik dan layanan yang kami tawarkan.</p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white shadow-md p-4 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Tentang Kami</h3>
                <p>Kami menyediakan layanan terbaik untuk Anda dengan kualitas yang terjamin.</p>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Layanan</h3>
                <p>Berbagai layanan yang dapat mendukung kebutuhan Anda sehari-hari.</p>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg">
                <h3 class="text-xl font-semibold mb-2">Hubungi Kami</h3>
                <p>Silakan hubungi kami untuk informasi lebih lanjut dan konsultasi gratis.</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-700 text-white p-4 text-center">
        &copy; 2025 STONE ISLAND. LARAVEL 1.
    </footer>
</body>
</html>
