<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}"
                alt="Logo de la compañía"
                class="w-[200px] h-[65px] mr-2">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-500">Inicio</a>
            <a href="{{ route('shop') }}" class="text-gray-700 hover:text-green-500">Tienda</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-500">Contacto</a>
        </nav>

        <!-- Desktop Icons -->
        @if (Route::has('login'))
        <div class="hidden md:flex items-center space-x-4">
            @auth
            <a
                href="{{ url('/home') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-green-500">
                <i class="fas fa-user"></i> Iniciar Sesión
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-gray-600 hover:text-green-500">
                <i class="fas fa-user-plus"></i> Registrarse
            </a>
            @endif
            @endauth
        </div>
        @endif

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-gray-600 hover:text-green-500" onclick="toggleMenu()">
            <i class="fas fa-bars fa-lg"></i>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-nav" class="hidden md:hidden bg-gray-100">
        <div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-500">Inicio</a>
            <a href="{{ route('shop') }}" class="text-gray-700 hover:text-green-500">Tienda</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-500">Contacto</a>

            @if (Route::has('login'))
            <div class="flex flex-col space-y-2">
                @auth
                <a
                    href="{{ url('/home') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-green-500">
                    <i class="fas fa-user"></i> Iniciar Sesión
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-gray-600 hover:text-green-500">
                    <i class="fas fa-user-plus"></i> Registrarse
                </a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </nav>
</header>

<script>
    function toggleMenu() {
        const nav = document.getElementById('mobile-nav');
        nav.classList.toggle('hidden');
    }
</script>