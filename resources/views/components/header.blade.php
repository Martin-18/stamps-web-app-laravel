<header class="shadow-md font-semibold tracking-wide bg-gray-100 text-gray-700 relative z-50 sticky top-0">
    <section class="md:flex items-center py-4 lg:px-10 px-4 border-b border-gray-300 justify-between">
        <!-- Logo de la tienda -->
        <a href="{{ route('home') }}" class="max-sm:w-full shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Logo de la tienda" class="w-[75px] h-[65px] mr-2">
        </a>

        <!-- Contenedor para el botón de hamburguesa en dispositivos móviles -->
        <div class="flex md:hidden items-center">
            <button class="text-gray-600 hover:text-gray-800 focus:outline-none" id="hamburger-button">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- Buscador visible solo en dispositivos grandes -->
        <div class="hidden md:flex rounded-md border-2 border-[#3A4750] overflow-hidden max-w-lg mx-auto font-[sans-serif]">
            <input type="email" placeholder="Buscar estampillas..."
                class="w-[1600px] outline-none bg-white text-gray-600 text-sm px-4 py-3" />
            <button type='button' class="flex items-center justify-center bg-[#3A4750] px-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-white">
                    <path
                        d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                    </path>
                </svg>
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

    <!-- Menú de navegación (oculto en dispositivos móviles) -->
    <nav class="lg:flex items-center justify-center py-2 bg-[#3A4750] text-white hidden md:flex" id="navbar">
        <a href="{{ route('home') }}" class="px-4 py-2 hover:text-[#D4A373] transition">Inicio</a>
    </nav>

    <!-- Menú de navegación para móviles (oculto por defecto) -->
    <nav class="lg:hidden bg-[#3A4750] text-white hidden" id="mobile-navbar">
        <!-- Enlace de navegación móvil -->
        <a href="/" class="block px-4 py-2 hover:text-[#D4A373] transition">Inicio</a>
        <a href="/news-stamps" class="block px-4 py-2 hover:text-[#D4A373] transition">Nuevas</a>
        <a href="/offers" class="block px-4 py-2 hover:text-[#D4A373] transition">Ofertas</a> 
        <a href="/contact" class="block px-4 py-2 hover:text-[#D4A373] transition">Contacto</a>

        <!-- Buscador en móviles -->
        <div class="flex rounded-md border-2 border-[#3A4750] overflow-hidden max-w-lg mx-auto font-[sans-serif]">
            <input type="email" placeholder="Buscar estampillas..."
            class="w-[1600px] outline-none bg-white text-gray-600 text-sm px-4 py-3" />
            <button type='button' class="flex items-center justify-center bg-[#3A4750] px-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-white">
                <path
                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                </path>
            </svg>
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
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileNavbar = document.getElementById('mobile-navbar');
    const navbar = document.getElementById('navbar');

    hamburgerButton.addEventListener('click', () => {
        mobileNavbar.classList.toggle('hidden'); 
    });
</script>
