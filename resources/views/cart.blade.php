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
                    <li><a href="#" class="hover:text-gray-200">Home</a></li>
                    <li><a href="#" class="hover:text-gray-200">My Cart</a></li>
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
        <table class="min-w-full">
            <thead>
                <tr class="bg-green-500 text-white">
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left">Description</th>
                    <th class="px-6 py-3 text-left">Price</th>
                    <th class="px-6 py-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fruit Item 1 -->
                <tr>
                    <td class="border px-6 py-4 relative">
                        <div class="bg-cover bg-center absolute inset-0" style="background-image: url('https://cdn.pixabay.com/photo/2017/09/26/13/21/apples-2788599_1280.jpg');"></div>
                        <div class="relative z-10 text-black">
                            <div class="bg-white px-2 py-1 rounded-lg absolute top-0 left-0 border-2 border-green-500">Apple</div>
                        </div>
                    </td>
                    <td class="border px-6 py-4">Fresh and crunchy apples from the orchard.</td>
                    <td class="border px-6 py-4">$1.99</td>
                    <td class="border px-6 py-4"><button class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Add to Cart</button></td>
                </tr>
                <!-- Fruit Item 2 -->
                <tr>
                    <td class="border px-6 py-4 relative">
                        <div class="bg-cover bg-center absolute inset-0" style="background-image: url('https://cdn.pixabay.com/photo/2017/06/27/22/21/banana-2449019_1280.jpg');"></div>
                        <div class="relative z-10 text-black">
                            <div class="bg-white px-2 py-1 rounded-lg absolute top-0 left-0 border-2 border-green-500">Banana</div>
                        </div>
                    </td>
                    <td class="border px-6 py-4">Sweet and ripe bananas picked fresh.</td>
                    <td class="border px-6 py-4">$0.99</td>
                    <td class="border px-6 py-4"><button class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Add to Cart</button></td>
                </tr>
                <!-- Fruit Item 3 -->
                <tr>
                    <td class="border px-6 py-4 relative">
                        <div class="bg-cover bg-center absolute inset-0" style="background-image: url('https://cdn.pixabay.com/photo/2016/01/02/02/03/orange-1117645_1280.jpg');"></div>
                        <div class="relative z-10 text-black">
                            <div class="bg-white px-2 py-1 rounded-lg absolute top-0 left-0 border-2 border-green-500">Orange</div>
                        </div>
                    </td>
                    <td class="border px-6 py-4">Juicy and tangy oranges bursting with flavor.</td>
                    <td class="border px-6 py-4">$2.49</td>
                    <td class="border px-6 py-4"><button class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Add to Cart</button></td>
                </tr>
            </tbody>
        </table>
    </main>



    <footer class="bg-green-500 py-6 text-center text-white">
        <div class="container mx-auto">
            <p>&copy; 2024 Fruit Shop. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
