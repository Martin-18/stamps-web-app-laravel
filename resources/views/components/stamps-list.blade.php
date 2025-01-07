<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($stamps as $stamp)
        <div class="bg-white shadow-lg rounded-md overflow-hidden">
            <img src="{{ asset('storage/' . $stamp->image) }}" alt="{{ $stamp->name }}" class="w-full">
            <div class="p-4">
                <h4 class="text-lg font-semibold text-gray-700">{{ $stamp->name }}</h4>
                <p class="text-gray-500">${{ number_format($stamp->price, 0, ',', '.') }}</p>
                <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                    Ver detalles
                </button>
            </div>
        </div>
    @endforeach
</div>

