@foreach ($stamps as $stamp)
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
@endforeach