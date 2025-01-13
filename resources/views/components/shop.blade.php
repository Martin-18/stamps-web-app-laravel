<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <x-header></x-header>

  <!-- Shop Section -->
  <main class="container mx-auto mt-8 px-4 flex-grow">
    <!-- Filters -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 space-y-4 sm:space-y-0">
      <h2 class="text-2xl font-bold text-gray-700 text-center sm:text-left">Tienda</h2>
      <form method="GET" action="{{ route('shop') }}" class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
        <!-- Campo de búsqueda -->
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Buscar..."
          class="border border-gray-300 rounded-lg py-2 px-4 w-full sm:w-64 focus:outline-none focus:ring-2 focus:ring-green-500">

        <!-- Campo de orden -->
        <select
          name="sort"
          class="border border-gray-300 rounded-lg py-2 px-4 w-full sm:w-auto focus:outline-none focus:ring-2 focus:ring-green-500">
          <option value="">Ordenar por</option>
          <option value="all" {{ request('sort') == 'all' ? 'selected' : '' }}>Todos</option>
          <option value="price-low" {{ request('sort') == 'price-low' ? 'selected' : '' }}>Precio: Barato a Caro</option>
          <option value="price-high" {{ request('sort') == 'price-high' ? 'selected' : '' }}>Precio: Caro a Barato</option>
          <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Más nuevas</option>
        </select>

        <!-- Botón de envío -->
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg">
          Filtrar
        </button>
      </form>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
      <x-stamps-list :stamps="$stamps"></x-stamps-list>
    </div>
    <!-- Paginación -->
    <x-pagination :stamps="$stamps" />
    
  </main>

  <!-- Footer -->
  <x-footer></x-footer>

</body>

</html>