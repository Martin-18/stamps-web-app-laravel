<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Stamps</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex flex-col">

    <x-header></x-header>

    <!-- Main Content -->
    <div class="flex-grow">
      <div class="container mx-auto mt-8 px-4">
        <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">Contactanos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Contact Form -->
          <form class="bg-white shadow-lg rounded-lg p-6 space-y-4">
            <div>
              <label for="name" class="block text-gray-700 font-medium mb-1">Nombre</label>
              <input type="text" id="name" placeholder="Tu nombre" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
              <label for="email" class="block text-gray-700 font-medium mb-1">Correo Electrónico</label>
              <input type="email" id="email" placeholder="Tu correo electrónico" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
              <label for="message" class="block text-gray-700 font-medium mb-1">Mensaje</label>
              <textarea id="message" rows="6" placeholder="Tu mensaje" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
              Enviar Mensaje
            </button>
          </form>

          <!-- Contact Info -->
          <div class="space-y-6">
            <div class="bg-white shadow-lg rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-700 mb-2">Nuestra localizacion</h3>
              <p class="text-gray-600">123 Stamp Street<br>Postal City, ST 45678</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-700 mb-2">Detalles de contacto</h3>
              <p class="text-gray-600">
                <i class="fas fa-envelope text-green-500 mr-2"></i> support@stampshop.com<br>
                <i class="fas fa-phone text-green-500 mr-2"></i> +1 234 567 890
              </p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
              <h3 class="text-lg font-semibold text-gray-700 mb-2">Siguenos en redes sociales</h3>
              <div class="flex space-x-4">
                <a href="#" class="text-green-500 hover:text-green-600"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-green-500 hover:text-green-600"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="text-green-500 hover:text-green-600"><i class="fab fa-instagram fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <x-footer></x-footer>
  </div>
</body>

</html>