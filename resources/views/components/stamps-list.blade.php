@foreach ($stamps as $stamp)
    <div class="bg-white shadow-lg rounded-md overflow-hidden">
        <img src="https://via.placeholder.com/200" alt="Stamp" class="w-full">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-700">{{ $stamp->name }}</h3>
            <p class="text-gray-500">${{ number_format($stamp->price, 0, ',', '.') }}</p>
            <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
                Ver detalles
            </button>
        </div>
    </div>
@endforeach


