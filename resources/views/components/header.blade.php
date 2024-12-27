<header class="shadow-md font-semibold tracking-wide bg-[#fdfaf2] text-gray-700 relative z-50 sticky top-0">
    <section class="md:flex items-center py-4 lg:px-10 px-4 border-b border-gray-300 justify-between">
        <!-- Logo de la tienda -->
        <a href="/" class="max-sm:w-full shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Logo de la tienda" class="w-10 h-10 mr-2">
        </a>

        <!-- Contenedor para el botón de hamburguesa en dispositivos móviles -->
        <div class="flex md:hidden items-center">
            <button class="text-gray-600 hover:text-gray-800 focus:outline-none" id="hamburger-button">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Buscador visible solo en dispositivos grandes -->
        <div class="flex-grow mx-4 relative hidden md:block">
            <input type="text" placeholder="Buscar estampillas..." 
                class="w-full bg-gray-100 focus:bg-white px-4 py-2 rounded-full shadow-inner outline-none text-sm placeholder-gray-500 transition-all" />
            <button class="absolute right-2 top-2 text-gray-600 hover:text-gray-800">
                <!-- Icono de búsqueda -->
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        
        @if (Route::has('login'))
            <nav class="flex items-center space-x-6 hidden md:flex">
                @auth
                    <a
                        href="{{ url('/home') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    Dashboard
                </a>
                @else

                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 transition">
                        <i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800 transition">
                            <i class="fa-solid fa-user-plus"></i> Registrarse
                        </a>
                    @endif
                @endauth
            </nav>
        @endif

    </section>

    <!-- Menú de navegación (oculto en dispositivos móviles) -->
    <nav class="lg:flex items-center justify-center py-2 bg-[#3A4750] text-white hidden md:flex" id="navbar">
        <a href="/" class="px-4 py-2 hover:text-[#D4A373] transition">Inicio</a>
        <a href="/news-stamps" class="px-4 py-2 hover:text-[#D4A373] transition">Nuevas</a>
        <a href="/offers" class="px-4 py-2 hover:text-[#D4A373] transition">Ofertas</a> 
        <a href="/contact" class="px-4 py-2 hover:text-[#D4A373] transition">Contacto</a>
    </nav>

    <!-- Menú de navegación para móviles (oculto por defecto) -->
    <nav class="lg:hidden bg-[#3A4750] text-white hidden" id="mobile-navbar">
        <!-- Enlace de navegación móvil -->
        <a href="/" class="block px-4 py-2 hover:text-[#D4A373] transition">Inicio</a>
        <a href="/news-stamps" class="block px-4 py-2 hover:text-[#D4A373] transition">Nuevas</a>
        <a href="/offers" class="block px-4 py-2 hover:text-[#D4A373] transition">Ofertas</a> 
        <a href="/contact" class="block px-4 py-2 hover:text-[#D4A373] transition">Contacto</a>

        <!-- Buscador en móviles -->
        <div class="px-4 py-2">
            <input type="text" placeholder="Buscar estampillas..." 
                class="w-full bg-gray-100 focus:bg-white px-4 py-2 rounded-full shadow-inner outline-none text-sm placeholder-gray-500 transition-all" />
            <button class="absolute right-2 top-2 text-gray-600 hover:text-gray-800">
                <!-- Icono de búsqueda -->
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <!-- Enlaces de login y registro en móviles -->
        @if (Route::has('login'))
            <div class="flex flex-col items-center space-y-4 py-4">
                @auth
                    <a
                        href="{{ url('/home') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-white-600 transition">
                        <i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white-600 transition">
                            <i class="fa-solid fa-user-plus"></i> Registrarse
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>
</header>

<script>
    // JavaScript para alternar el menú de navegación en móviles
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileNavbar = document.getElementById('mobile-navbar');
    const navbar = document.getElementById('navbar');

    hamburgerButton.addEventListener('click', () => {
        mobileNavbar.classList.toggle('hidden'); // Muestra u oculta el menú móvil
    });
</script>
