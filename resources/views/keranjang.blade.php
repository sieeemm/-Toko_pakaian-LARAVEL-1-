<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Keranjang Pembelian - STONE ISLAND</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen flex flex-col">
  <header class="bg-gray-700 text-white p-4 text-center">
    <h1 class="text-3xl font-bold">Keranjang Pembelian</h1>
  </header>

  <main class="p-6 flex-1">
    <div id="cart-items" class="bg-white p-4 shadow-md rounded-lg mb-6">
      <!-- Item keranjang akan ditambahkan di sini -->
    </div>
    <div class="flex justify-between font-bold mt-2">
      <span>Total</span>
      <span id="total-price">Rp 0</span>
    </div>
    <button id="checkout-button" class="mt-4 w-full bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Checkout</button>
  </main>

  <footer class="bg-gray-700 text-white p-4 text-center">
    &copy; 2025 STONE ISLAND. LARAVEL 1.
  </footer>

  <script>
    // Contoh data produk
    const cart = [
      { id: 1, name: 'stone island nylon metal jacket', price: 500000, quantity: 1 },
      { id: 2, name: 'stone island hand corossion jacket', price: 600000, quantity: 1 },
      { id: 3, name: 'stone island painted camouflage jacket', price: 550000, quantity: 1 },
      { id: 4, name: 'Stone Island Heat Reactive Jacket', price: 700000, quantity: 1 },
    ];

    function renderCart() {
      const cartItemsContainer = document.getElementById('cart-items');
      cartItemsContainer.innerHTML = ''; // Kosongkan kontainer

      let totalPrice = 0;

      cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        totalPrice += itemTotal;

        const itemDiv = document.createElement('div');
        itemDiv.className = 'flex justify-between items-center border-b py-2';
        itemDiv.innerHTML = `
          <div>
            <span>${item.name}</span>
            <div class="flex items-center">
              <button onclick="updateQuantity(${item.id}, -1)" class="text-red-500">-</button>
              <span class="mx-2">${item.quantity}</span>
              <button onclick="updateQuantity(${item.id}, 1)" class="text-green-500">+</button>
            </div>
          </div>
          <span>Rp ${itemTotal.toLocaleString()}</span>
          <button onclick="removeItem(${item.id})" class="text-red-500">Hapus</button>
        `;
        cartItemsContainer.appendChild(itemDiv);
      });

      document.getElementById('total-price').innerText = `Rp ${totalPrice.toLocaleString()}`;
    }

    function updateQuantity(id, change) {
      const item = cart.find(item => item.id === id);
      if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
          removeItem(id);
        } else {
          renderCart();
        }
      }
    }

    function removeItem(id) {
      const index = cart.findIndex(item => item.id === id);
      if (index > -1) {
        cart.splice(index, 1);
        renderCart();
      }
    }

    document.getElementById('checkout-button').addEventListener('click', () => {
      alert('Proses checkout...');
      // Tambahkan logika checkout di sini
    });

    // Render keranjang saat halaman dimuat
    renderCart();
  </script>
</body>
</html>