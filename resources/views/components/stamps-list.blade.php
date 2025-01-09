@if(count($stamps) > 0)
    @foreach ($stamps as $stamp)
        <div class="bg-white shadow-lg rounded-md overflow-hidden">
            <img src="https://via.placeholder.com/200" alt="Stamp" class="w-full">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">{{ $stamp->name }}</h3>
                <p class="text-sm font-bold text-[#966343] uppercase mb-2">
                    {{ $stamp->created_at ? $stamp->created_at->format('d M Y') : 'Fecha no disponible' }}
                </p>
                <p class="text-gray-500">${{ number_format($stamp->price, 0, ',', '.') }}</p>
                <a href="{{ route('detail', ['id' => $stamp->id]) }}">
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                        Ver detalles
                    </button>
                </a>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center text-gray-500">No stamps found.</p>
@endif
