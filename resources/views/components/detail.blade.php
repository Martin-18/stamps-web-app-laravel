<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp Details - StampShop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800">

  <x-header></x-header>

  <!-- Stamp Details Section -->
  <main class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Stamp Image -->
      <div>
        <img src="{{ $stamp->image ? asset($stamp->image) : asset('images/default.jpg') }}" alt="Stamp" class="w-full rounded shadow-lg">
      </div>

      <!-- Stamp Info -->
      <div>
        <h2 class="text-3xl font-bold text-gray-700 mb-4">{{ $stamp->name }}</h2>
        <p class="text-gray-500 mb-6">
          {{ $stamp->description }}
        </p>

        <p class="text-2xl font-semibold text-green-600 mb-4">${{ number_format($stamp->price, 2, '.', ',') }}</p>

        <div class="flex items-center space-x-4 mb-6">
          <a href="{{ route('shop') }}">
            <button class="bg-red-500 text-white py-2 px-6 rounded hover:bg-red-600">
              Volver a la tienda
            </button>
          </a>
        </div>

        <!-- Reviews -->
        <div>
          <h3 class="text-lg font-semibold text-gray-700 mb-4">Reseñas</h3>
          <ul class="space-y-4">
            <li class="bg-gray-100 p-4 rounded">
              <p class="text-gray-600">“Absolutely stunning stamp! The quality exceeded my expectations.”</p>
              <p class="text-sm text-gray-500 mt-2">- Jane Doe</p>
            </li>
            <li class="bg-gray-100 p-4 rounded">
              <p class="text-gray-600">“A must-have for any collector!”</p>
              <p class="text-sm text-gray-500 mt-2">- John Smith</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <x-footer></x-footer>
</body>

</html>