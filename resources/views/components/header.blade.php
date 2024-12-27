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