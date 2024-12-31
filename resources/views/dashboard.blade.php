<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="max-w-lg mx-auto bg-gray-900 border border-gray-700 rounded-lg shadow-md p-6 mt-12 text-gray-200">
        <h2 class="text-2xl font-bold text-white mb-4">Subir Sello</h2>
        <form action="{{ route('stamps.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nombre del sello -->
            <div class="mb-4">
                <label for="name" class="block text-white font-bold mb-2">Nombre del sello:</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-700 rounded-md px-4 py-2 bg-[#3A4750] text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#D4A373]" placeholder="Escribe el nombre del sello" required />
            </div>

            <!-- Precio -->
            <div class="mb-4">
                <label for="price" class="block text-white font-bold mb-2">Precio:</label>
                <input type="number" id="price" name="price" class="w-full border border-gray-700 rounded-md px-4 py-2 bg-[#3A4750] text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#D4A373]" placeholder="Escribe el precio del sello" required />
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="description" class="block text-white font-bold mb-2">Descripción:</label>
                <textarea id="description" name="description" class="w-full border border-gray-700 rounded-md px-4 py-2 bg-[#3A4750] text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#D4A373]" rows="4" placeholder="Escribe una breve descripción del sello" required></textarea>
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label for="image" class="block text-white font-bold mb-2">Imagen:</label>
                <input type="file" id="image" name="image" class="w-full border border-gray-700 rounded-md px-4 py-2 bg-[#3A4750] text-gray-200 focus:outline-none focus:ring-2 focus:ring-[#D4A373]" accept="image/*" required />
            </div>

            <!-- Botón -->
            <button type="submit" class="bg-[#D4A373] text-gray-900 font-semibold text-sm px-4 py-3 w-full rounded-md hover:bg-[#B68E6D] transition-colors duration-200">
                Subir Sello
            </button>
        </form>
    </div>
</x-app-layout>
