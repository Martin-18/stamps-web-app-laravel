<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de estampillas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>   
<body class="bg-gray-100">

  <x-header></x-header>

  <div class="font-sans tracking-wide my-20">
    <div class="p-4 lg:max-w-7xl max-w-xl mx-auto">
        <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12">
            <div class="min-h-[500px] lg:col-span-3 bg-[#3A4750]-to-tr from-[#F8C794] via-[#FFE0B5] to-[#FFF2D7] rounded-lg w-full lg:sticky top-0 text-center p-6">
                <div class="relative group">
                    <img src="https://media.istockphoto.com/id/1147845636/es/foto/sello-de-franqueo-cancelado-impreso-por-la-mente-india-muestra-cuatro-leones-indios-capital-de.jpg?s=2048x2048&w=is&k=20&c=PUMcjnFj57L47IzAG7ew5ljypuLIWEBAa986V2EzveY=" alt="Stamp Product" class="w-3/5 rounded object-cover mx-auto py-6 transition-transform duration-300 ease-in-out group-hover:scale-105 cursor-zoom-in" />
                    <div class="absolute inset-0 hidden group-hover:flex items-center justify-center bg-black bg-opacity-30 text-white text-sm rounded-lg">Zoom para ver detalles</div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h2 class="text-2xl font-bold text-gray-800">{{ $stamp->name }}</h2>

                <div class="flex items-center gap-4 mt-4">
                    <p class="text-gray-800 text-xl font-semibold">{{ $stamp->price }}</p>
                </div>

                <p class="mt-2 text-sm text-red-600 font-medium">¡Solo quedan 5 unidades en stock!</p>

                <div class="mt-8">
                    <h3 class="text-xl font-bold text-gray-800">Sobre la colección</h3>
                    <ul class="list-disc space-y-3 pl-4 text-gray-800 text-sm">
                        <li>Estampillas de alta calidad, ideales para coleccionistas.</li>
                        <li>Edición limitada, con detalles únicos y diseños históricos.</li>
                        <li>Perfecto para regalar o para ampliar tu colección personal.</li>
                    </ul>
                </div>

                <button type="button" class="w-full mt-8 px-6 py-3 bg-[#3A4750] hover:bg-[#8B1E3F] text-white font-semibold text-sm rounded-md">Añadir al carrito</button>

                <div class="mt-4 flex gap-2">
                  <a href="{{ route('home') }}">
                    <button type="button" class="px-4 py-2 bg-[#8B1E3F] text-white font-semibold text-sm rounded-md">Volver a la tienda</button>
                  </a>
                </div>
            </div>
        </div>
    </div>
  </div>

  <x-footer></x-footer>

</body>
</html>
