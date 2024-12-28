<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de estampillas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('images/logo.png') }}">
</head>
<body class="bg-gray-100">

    <x-header></x-header>

    <div class="font-sans p-6 mx-auto xl:max-w-[1700px] lg:max-w-[1500px] md:max-w-[1100px] sm:max-w-[800px] max-w-full">
        <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Nuevas Estampillas/Sellos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            @foreach ($newsStamps as $newStamp)
                <div class="bg-white rounded-md shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <div class="h-[250px] overflow-hidden">
                        <img src="https://media.istockphoto.com/id/1147845636/es/foto/sello-de-franqueo-cancelado-impreso-por-la-mente-india-muestra-cuatro-leones-indios-capital-de.jpg?s=2048x2048&w=is&k=20&c=PUMcjnFj57L47IzAG7ew5ljypuLIWEBAa986V2EzveY=" alt="stamp1" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-gray-700">{{ $newStamp->name }}</h3>
                        <h4 class="text-2xl text-[#3D5300] font-bold mt-2">${{ $newStamp->price }}</h4>
                    </div>
                    <a href="{{ route('detail', ['id' => $newStamp->id]) }}">
                        <button type="button" class="bg-[#3A4750] text-white font-semibold text-sm px-4 py-3 w-full hover:bg-[#D4A373] transition-colors duration-200">
                            Ver detalles
                        </button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <x-footer></x-footer>

</body>
</html>