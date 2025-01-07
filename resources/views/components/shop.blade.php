<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - Stamps</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800">

    <x-header></x-header>

    <!-- Shop Section -->
    <div class="container mx-auto mt-8 px-4">
        <!-- Filters -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-700">Shop Stamps</h2>
            <div class="flex space-x-4">
                <input type="text" placeholder="Search..." class="border border-gray-300 rounded-lg py-2 px-4 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                <select class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Sort By</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="newest">Newest</option>
                </select>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Product Card -->
            <x-stamps-list></x-stamps-list>
        </div>
    </div>
</body>
</html>