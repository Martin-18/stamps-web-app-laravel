<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto bg-white border border-[#d1c7bd] rounded-lg shadow-md p-6 mt-12">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Subir Sello</h2>
        <form action="/upload-stamp" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nombre del sello -->
            <div class="mb-4">
                <label for="name" class="block text-[#966343] font-bold mb-2">Nombre del sello:</label>
                <input type="text" id="name" name="name" class="w-full border border-[#d1c7bd] rounded-md px-4 py-2 text-gray-700 focus:outline-none focus:border-[#3A4750]" placeholder="Escribe el nombre del sello" required />
            </div>

            <!-- Precio -->
            <div class="mb-4">
                <label for="price" class="block text-[#966343] font-bold mb-2">Precio:</label>
                <input type="number" id="price" name="price" class="w-full border border-[#d1c7bd] rounded-md px-4 py-2 text-gray-700 focus:outline-none focus:border-[#3A4750]" placeholder="Escribe el precio del sello" required />
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="description" class="block text-[#966343] font-bold mb-2">Descripción:</label>
                <textarea id="description" name="description" class="w-full border border-[#d1c7bd] rounded-md px-4 py-2 text-gray-700 focus:outline-none focus:border-[#3A4750]" rows="4" placeholder="Escribe una breve descripción del sello" required></textarea>
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label for="image" class="block text-[#966343] font-bold mb-2">Imagen:</label>
                <input type="file" id="image" name="image" class="w-full border border-[#d1c7bd] rounded-md px-4 py-2 text-gray-700 focus:outline-none focus:border-[#3A4750]" accept="image/*" required />
            </div>

            <!-- Botón -->
            <button type="submit" class="bg-[#3A4750] text-white font-semibold text-sm px-4 py-3 w-full rounded-md hover:bg-[#D4A373] transition-colors duration-200">
                Subir Sello
            </button>
        </form>
    </div>


</x-app-layout>
