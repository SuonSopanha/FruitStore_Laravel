<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-green-500 p-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="text-white text-xl font-bold">Fruit Shop</div>
                <ul class="flex space-x-6 text-white">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="/cart" class="hover:text-gray-200">My Cart</a></li>
                    <li><a href="#" class="hover:text-gray-200">About</a></li>
                    <li><a href="#" class="hover:text-gray-200">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-cover bg-center relative py-20 text-center" style="background-image: url('https://kofirm.com/wp-content/uploads/2018/04/iStock-912915790-1.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative">
            <h1 class="text-4xl font-bold text-white">Welcome to our Fruit Shop</h1>
            <p class="mt-4 text-lg text-gray-200">Fresh, organic fruits delivered to your doorstep!</p>
        </div>
    </header>
    <main class="container mx-auto py-12">

        @yield('content')
    </main>
    <footer class="bg-green-500 py-6 text-center text-white">
        <div class="container mx-auto">
            <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
