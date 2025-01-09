<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    <main class="container mx-auto mt-8 px-4 flex flex-col lg:flex-row gap-8 justify-center items-center">
        <!-- Formulario -->
        <section class="bg-white shadow-md rounded-lg p-6 w-full lg:w-1/2 h-auto lg:h-full flex flex-col">
            <h2 class="text-2xl font-bold text-gray-700 mb-4">Agregar Sello</h2>
            <form action="{{ route('stamps.update', $stamp->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 flex-grow">
                @csrf
                @method('PUT') <!-- Esto indica que la solicitud debe ser PUT -->

                <!-- Nombre -->
                <div>
                    <label for="name" class="block text-gray-600 font-medium mb-1">Nombre del Sello</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ $stamp->name }}"
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
                        value="{{ $stamp->price }}"
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
                        class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">{{ $stamp->description }}</textarea>
                </div>

                <!-- Imagen -->
                <div>
                    <label for="image" class="block text-gray-600 font-medium mb-1">Imagen del Sello</label>
                    <input 
                        type="file" 
                        id="image" 
                        name="image" 
                        class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <!-- Botón -->
                <div>
                    <button 
                        type="submit" 
                        class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                        Actualizar Sello
                    </button>
                </div>
            </form>
        </section>
    </main>
</x-app-layout>
