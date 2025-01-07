<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <h1 class="text-xl font-bold text-green-600">StampShop</h1>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-500">Home</a>
            <a href="{{ route('shop') }}" class="text-gray-700 hover:text-green-500">Shop</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-500">Contact</a>
        </nav>

        <!-- Desktop Icons -->
        @if (Route::has('login'))
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <a
                        href="{{ url('/home') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-green-500">
                        <i class="fas fa-user"></i> Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-green-500">
                            <i class="fas fa-user-plus"></i> Register
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
            <a href="#" class="text-gray-700 hover:text-green-500">Home</a>
            <a href="shop.html" class="text-gray-700 hover:text-green-500">Shop</a>
            <a href="contact.html" class="text-gray-700 hover:text-green-500">Contact</a>
            <div class="flex flex-col space-y-2">
                <a href="#" class="text-gray-600 hover:text-green-500"><i class="fas fa-user"></i> Login</a>
                <a href="#" class="text-gray-600 hover:text-green-500"><i class="fas fa-user-plus"></i> Register</a>
            </div>
        </div>
    </nav>
</header>

<script>
    function toggleMenu() {
      const nav = document.getElementById('mobile-nav');
      nav.classList.toggle('hidden');
    }
</script>