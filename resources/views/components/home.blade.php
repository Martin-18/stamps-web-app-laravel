<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de estampillas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-gray-100">

    <header class="shadow-md font-semibold tracking-wide bg-[#fdfaf2] text-gray-700 relative z-50">
        <section class="md:flex items-center py-4 lg:px-10 px-4 border-b border-gray-300">
            <!-- Logo de la tienda -->
            <a href="/" class="max-sm:w-full shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de la tienda" class="w-10 h-10 mr-2">
            </a>

            <div class="flex-grow mx-4 relative">
                <input type="text" placeholder="Buscar estampillas..." 
                    class="w-full bg-gray-100 focus:bg-white px-4 py-2 rounded-full shadow-inner outline-none text-sm placeholder-gray-500 transition-all" />
                <button class="absolute right-2 top-2 text-gray-600 hover:text-gray-800">
                    <!-- Icono de búsqueda -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            
            @if (Route::has('login'))
                <nav class="flex items-center space-x-6">
                    @auth
                        <a
                            href="{{ url('/home') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                        Dashboard
                    </a>
                    @else

                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 transition">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800 transition">
                                <i class="fa-solid fa-user-plus"></i>
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif

        </section>

        <nav class="lg:flex items-center justify-center py-2 bg-[#3A4750] text-white hidden">
            <a href="/" class="px-4 py-2 hover:text-[#D4A373] transition">Inicio</a>
            <a href="/news-stamps" class="px-4 py-2 hover:text-[#D4A373] transition">Nuevas</a>
            <a href="/colections" class="px-4 py-2 hover:text-[#D4A373] transition">Colecciones</a>
            <a href="/categories" class="px-4 py-2 hover:text-[#D4A373] transition">Categorías</a>
            <a href="/offers" class="px-4 py-2 hover:text-[#D4A373] transition">Ofertas</a> 
            <a href="/contact" class="px-4 py-2 hover:text-[#D4A373] transition">Contacto</a>
        </nav>
    </header>

    <div class="font-sans p-6 mx-auto xl:max-w-7xl lg:max-w-5xl md:max-w-3xl max-w-md">
        <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Colección de estampillas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
                <div class="h-[250px] overflow-hidden">
                <img src="https://media.istockphoto.com/id/1147845636/es/foto/sello-de-franqueo-cancelado-impreso-por-la-mente-india-muestra-cuatro-leones-indios-capital-de.jpg?s=2048x2048&w=is&k=20&c=PUMcjnFj57L47IzAG7ew5ljypuLIWEBAa986V2EzveY=" alt="stamp1" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                </div>
                <div class="p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">INDIA-CIRCA 1950</h3>
                <h4 class="text-2xl text-[#3D5300] font-bold mt-2">$100.000</h4>
                </div>
                <a href="./detalle.html">
                <button type="button" class="bg-[#3A4750] text-white font-semibold text-sm px-4 py-3 w-full hover:bg-[#8B1E3F] transition-colors duration-200">
                    Ver detalles
                </button>
                </a>
            </div>
        </div>
    </div>

    <footer class="bg-[#3A4750] p-12 font-[sans-serif] tracking-wide text-gray-300">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <div class="flex flex-col items-start space-y-4">
                <a href="/" class="inline-block mb-4">
                    <img src="https://readymadeui.com/readymadeui-light.svg" alt="logo" class="w-48" />
                </a>
                <div class="flex space-x-4">
                    <a href="javascript:void(0)" class="fill-gray-300 hover:fill-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="fill-gray-300 hover:fill-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="javascript:void(0)" class="fill-gray-300 hover:fill-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Contáctanos</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="mailto:support@stampshop.com" class="hover:text-white">Email</a></li>
                    <li><a href="tel:+1234567890" class="hover:text-white">Teléfono</a></li>
                    <li><a href="javascript:void(0)" class="hover:text-white">Dirección</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Información</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="javascript:void(0)" class="hover:text-white">Sobre Nosotros</a></li>
                    <li><a href="javascript:void(0)" class="hover:text-white">Términos &amp; Condiciones</a></li>
                    <li><a href="javascript:void(0)" class="hover:text-white">Política de Privacidad</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Suscríbete</h4>
                <p class="text-sm text-gray-300 mb-4">Recibe noticias y ofertas especiales sobre estampillas</p>
                <form class="flex space-x-2">
                    <input type="email" placeholder="Tu correo" class="w-full px-3 py-2 rounded focus:outline-none text-gray-800" />
                    <button type="submit" class="bg-[#e5b500] hover:bg-yellow-500 text-white font-semibold px-4 py-2 rounded transition">Enviar</button>
                </form>
            </div>
        </div>
        <p class="text-center text-gray-400 text-xs">© 2024 StampShop. Todos los derechos reservados.</p>
    </footer>

</body>
</html>