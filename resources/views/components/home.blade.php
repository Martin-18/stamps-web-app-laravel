<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Tienda de Sellos</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <x-header></x-header>

  <!-- Nueva Sección del Home -->
  <section class="bg-gradient-to-r from-green-500 to-green-700 text-white py-16 px-4 text-center">
    <div class="container mx-auto">
      <h1 class="text-4xl font-bold mb-4">Bienvenido a la Tienda de Sellos</h1>
      <p class="text-lg mb-6">
        Explora una colección única de sellos históricos y modernos, cuidadosamente seleccionados para los amantes del arte y la historia.
      </p>
      <a href="#about" class="bg-white text-green-700 font-semibold py-3 px-6 rounded-lg hover:bg-gray-200">
        Más sobre nuestra historia
      </a>
    </div>
  </section>

  <!-- Sección Sobre Nosotros -->
  <section id="about" class="py-12 container mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-gray-700 mb-6">Nuestra Historia</h2>
    <p class="text-lg text-gray-600 mb-6">
      Este proyecto nació de la pasión por coleccionar sellos y compartir su historia. Cada uno de nuestros sellos tiene un pedazo de arte, cultura y tiempo que contar. Nos encanta preservar esta tradición para futuras generaciones.
    </p>
    <img src="https://via.placeholder.com/800x400" alt="Colección de Sellos" class="rounded shadow-lg mx-auto">
  </section>

  <!-- Sección Destacados -->
  <section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">Sellos Destacados</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        <!-- Ejemplo de Sellos -->
        <div class="bg-white p-4 rounded shadow">
          <img src="https://via.placeholder.com/200" alt="Sello 1" class="w-full rounded mb-4">
          <h3 class="text-lg font-bold text-gray-700">Sello Antiguo</h3>
          <p class="text-gray-600">Un hermoso sello del siglo XX.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <img src="https://via.placeholder.com/200" alt="Sello 2" class="w-full rounded mb-4">
          <h3 class="text-lg font-bold text-gray-700">Sello Moderno</h3>
          <p class="text-gray-600">Un sello conmemorativo especial.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <img src="https://via.placeholder.com/200" alt="Sello 1" class="w-full rounded mb-4">
          <h3 class="text-lg font-bold text-gray-700">Sello Antiguo</h3>
          <p class="text-gray-600">Un hermoso sello del siglo XX.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <img src="https://via.placeholder.com/200" alt="Sello 2" class="w-full rounded mb-4">
          <h3 class="text-lg font-bold text-gray-700">Sello Moderno</h3>
          <p class="text-gray-600">Un sello conmemorativo especial.</p>
        </div>
        <!-- Añade más sellos aquí -->
      </div>
    </div>
  </section>

  <!-- Sección Contacto -->
  <section class="py-16 bg-green-600 text-white text-center">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-4">Contáctanos</h2>
      <p class="text-lg mb-6">Si deseas saber más sobre nuestra colección, no dudes en contactarnos.</p>
      <a href="{{ route('contact') }}" class="bg-white text-green-700 font-semibold py-3 px-6 rounded-lg hover:bg-gray-200">
        Envíanos un Correo
      </a>
    </div>
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

</body>

</html>