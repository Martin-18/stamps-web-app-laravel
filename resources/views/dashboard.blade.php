<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <!-- <div class="bg-{{ session('color') }}-200 border-{{ session('color') }}-600 text-{{ session('color') }}-600 border-l-4 p-4" role="alert">
            <p class="font-bold">
                {{ session('success') }}
            </p>
        </div> -->

        <div class="bg-{{ session('color') }}-500 py-2 px-4 rounded-md text-white text-center fixed bottom-4 right-4 flex gap-4">
            <p class="font-bold">
                {{ session('success') }}
            </p>
            <span class="cursor-pointer font-bold" onclick="return this.parentNode.remove()"><sup>X</sup></span>
        </div>

        <!-- <div class="w-full md:w-1/3 mx-auto p-14">
            <div class="flex items-center justify-between p-5 leading-normal text-{{ session('color') }}-600 bg-blue-100 rounded-lg" role="alert">
                <p>{{ session('success') }}</p>
                <svg onclick="return this.parentNode.remove();" class="inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z"/>
                </svg>
            </div>
        </div> -->
    @endif

    <main class="container mx-auto mt-8 px-4 flex flex-col lg:flex-row gap-8">
    <!-- Formulario -->
    <section class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2 h-auto lg:h-full flex flex-col">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Agregar Sello</h2>
        <form action="{{ route('stamps.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 flex-grow">
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
                @foreach ($stamps as $stamp)
                    <tr>
                        <td class="py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ $stamp->name }}</td>
                        <td class="py-2 px-4">${{ number_format($stamp->price, 2) }}</td>
                        <td class="py-2 px-4">
                            <a class="text-blue-500 hover:underline" href="{{ route('stamps.edit', $stamp->id) }}">Editar</a> | 
                            <form action="{{ route('stamps.destroy', $stamp->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>


</x-app-layout>
