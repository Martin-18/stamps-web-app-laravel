@foreach ($stamps as $stamp)
    <div class="font-sans p-6 mx-auto xl:max-w-7xl lg:max-w-5xl md:max-w-3xl max-w-md">
        <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Colección de estampillas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
                <div class="h-[250px] overflow-hidden">
                <img src="https://media.istockphoto.com/id/1147845636/es/foto/sello-de-franqueo-cancelado-impreso-por-la-mente-india-muestra-cuatro-leones-indios-capital-de.jpg?s=2048x2048&w=is&k=20&c=PUMcjnFj57L47IzAG7ew5ljypuLIWEBAa986V2EzveY=" alt="stamp1" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                </div>
                <div class="p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">{{ $stamp->name }}</h3>
                <h4 class="text-2xl text-[#3D5300] font-bold mt-2">{{ $stamp->price }}</h4>
                </div>
                <a href="./detalle.html">
                <button type="button" class="bg-[#3A4750] text-white font-semibold text-sm px-4 py-3 w-full hover:bg-[#8B1E3F] transition-colors duration-200">
                    Ver detalles
                </button>
                </a>
            </div>
        </div>
    </div>
@endforeach