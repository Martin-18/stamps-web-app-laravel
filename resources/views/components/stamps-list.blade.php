@foreach ($stamps as $stamp)
    <!-- Card individual -->
    <div class="bg-white border border-[#d1c7bd] rounded-lg overflow-hidden shadow-md hover:shadow-xl transform transition duration-300 hover:scale-105">
        <!-- Imagen -->
        <div class="h-64 overflow-hidden">
            <img src="{{ asset('storage/' . $stamp->image) }}" alt="{{ $stamp->name }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
        </div>

        <!-- Contenido -->
        <div class="p-6">
            <!-- Fecha -->
            <p class="text-sm font-bold text-[#966343] uppercase mb-2">
                {{ $stamp->created_at ? $stamp->created_at->format('d M Y') : 'Fecha no disponible' }}
            </p>

            <!-- Título -->
            <a href="{{ route('detail', $stamp->id) }}" class="text-xl font-bold text-gray-700 mb-4 hover:text-[#7b4e33]">
                {{ $stamp->name }}
            </a>
            <!-- Descripción -->
            <p class="text-[#4a4a4a] mb-6">{{ $stamp->description }}</p>

            <!-- Precio -->
            <p class="text-2xl font-bold text-[#3D5300] mb-4">${{ number_format($stamp->price, 0, ',', '.') }}</p>

            <!-- Botón -->
            <a href="{{ route('detail', ['id' => $stamp->id]) }}">
                <button type="button" class="bg-[#3A4750] text-white font-semibold text-sm px-4 py-3 w-full hover:bg-[#D4A373] transition-colors duration-200">
                    Ver detalles
                </button>
            </a>
        </div>
    </div>
@endforeach
