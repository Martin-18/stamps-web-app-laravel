<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamps E-commerce</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('images/logo2.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
</head>

<body class="bg-gray-50 text-gray-800">

    <x-header></x-header>

    <!-- Main Content -->
    <main class="flex-grow">
      <!-- Hero Section -->
      <section class="bg-gradient-to-r from-green-400 via-green-500 to-green-600 text-white py-16 text-center">
        <h2 class="text-4xl font-bold mb-4">Discover Unique Stamps</h2>
        <p class="text-lg mb-6">Explore our collection of rare and vintage stamps from around the world.</p>
        <a href="{{ route('shop') }}" class="bg-white text-green-600 font-semibold py-3 px-6 rounded hover:bg-gray-200">
          Shop Now
        </a>
      </section>
      
      <!-- Featured Products -->
      <section class="container mx-auto py-12 px-4">
        <h3 class="text-2xl font-bold text-gray-700 mb-6 text-center">Featured Products</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <x-stamps-list></x-stamps-list>
        </div>
      </section>

      <!-- Categories Highlights -->
      <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
          <h3 class="text-2xl font-bold text-gray-700 mb-6 text-center">Shop by Category</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-8 text-center hover:bg-green-600">
              <h4 class="text-xl font-bold">Rare Stamps</h4>
            </div>
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-8 text-center hover:bg-green-600">
              <h4 class="text-xl font-bold">Vintage Stamps</h4>
            </div>
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-8 text-center hover:bg-green-600">
              <h4 class="text-xl font-bold">Limited Edition</h4>
            </div>
          </div>
        </div>
      </section>
    </main>

    <x-footer></x-footer>

</body>
</html>