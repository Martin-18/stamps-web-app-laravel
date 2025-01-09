<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    @if ($mgs = Session::get('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <main class="container mx-auto mt-8 px-4 flex flex-col lg:flex-row gap-8">
        <!-- Formulario -->
        <section class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Agregar Sello</h2>
            <form action="{{ route('stamps.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- Nombre -->
            <div>
                <label for="name" class="block text-gray-600 font-medium mb-1">Nombre del Sello</label>
                <input 
                type="text" 
                id="name" 
                name="name" 
                required 
                placeholder="Ej: Sello Histórico" 
                class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <!-- Precio -->
            <div>
                <label for="price" class="block text-gray-600 font-medium mb-1">Precio</label>
                <input 
                type="number" 
                id="price" 
                name="price" 
                required 
                placeholder="Ej: 10.00" 
                class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <!-- Descripción -->
            <div>
                <label for="description" class="block text-gray-600 font-medium mb-1">Descripción</label>
                <textarea 
                id="description" 
                name="description" 
                required 
                placeholder="Escribe una breve descripción del sello" 
                class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <!-- Imagen -->
            <div>
                <label for="image" class="block text-gray-600 font-medium mb-1">Imagen del Sello</label>
                <input 
                type="file" 
                id="image" 
                name="image" 
                required 
                class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <!-- Botón -->
            <div>
                <button 
                type="submit" 
                class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                Guardar Sello
                </button>
            </div>
            </form>
        </section>

        <!-- Tabla de Sellos -->
        <section class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2 overflow-x-auto">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Lista de Sellos</h2>
            <table class="min-w-full bg-white border border-gray-200 text-left text-sm text-gray-600">
            <thead>
                <tr class="bg-gray-100 border-b border-gray-300">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Nombre</th>
                <th class="py-2 px-4">Precio</th>
                <th class="py-2 px-4">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de Fila -->
                <tr class="border-b border-gray-200">
                <td class="py-2 px-4">1</td>
                <td class="py-2 px-4">Sello Histórico</td>
                <td class="py-2 px-4">$10.00</td>
                <td class="py-2 px-4">
                    <button class="text-blue-500 hover:underline">Editar</button> | 
                    <button class="text-red-500 hover:underline">Eliminar</button>
                </td>
                </tr>
                <!-- Más filas dinámicas -->
            </tbody>
            </table>
        </section>
    </main>

</x-app-layout>
