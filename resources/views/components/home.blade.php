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
        <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Estampillas/Sellos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <x-stamps-list></x-stamps-list>
        </div>
    </div>

    <x-footer></x-footer>

</body>
</html>