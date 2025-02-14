<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STONE ISLAND</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-cover bg-center" 
style="background-image: url('images/login.jpg');">
  
  <div class="bg-black bg-opacity-60 p-8 rounded-lg shadow-lg w-96 text-center">
    <h2 class="text-white text-2xl font-bold mb-6">Login Form</h2>
    <form class="space-y-4">
      <input type="email" placeholder="Enter your email" 
        class="w-full p-2 border-b border-gray-400 bg-transparent text-white placeholder-white focus:outline-none" />
      <input type="password" placeholder="Enter your password" 
        class="w-full p-2 border-b border-gray-400 bg-transparent text-white placeholder-white focus:outline-none" />
      <button type="submit" class="w-full bg-white text-black font-semibold py-2 rounded hover:bg-gray-300 transition">logIn</button>
      <button type="submit" class="w-full bg-white text-black font-semibold py-2 rounded hover:bg-gray-300 transition"><a href="kembali">Kembali</button>
    </form>
    <p class="text-white mt-4 text-sm">Don't have an account? <a href="#" class="underline">Register</a></p>
  </div>

</body>
</html>

