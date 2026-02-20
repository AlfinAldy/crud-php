<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mulia Mart</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-400 p-4 shadow">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-2xl font-bold">Mulia Mart</a>
            <div class="hidden md:block">
                <a href="#" class="text-white hover:underline px-4">Login</a>
            </div>
        <button class="md:hidden text-white" onclick="toggleMenu()">☰</button>
        </div>
        <div id="mobileMenu" class="md:hidden hidden mt-2">
            <a href="#" class="block text-white py-2 px-4 hover:bg-blue-500">Login</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex justify-center items-center py-12 px-4">
        <div class="w-full max-w-xl bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="./assets/cover.png" alt="Cover" class="w-full h-60 object-cover" />
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-semibold mb-4">Mulia Mart</h2>
                    <p class="text-gray-600 mb-6">
                        Mulia Mart adalah supermarket modern yang menawarkan pengalaman belanja yang nyaman dan lengkap untuk memenuhi semua kebutuhan sehari-hari Anda. Kami menyediakan berbagai macam produk berkualitas tinggi, mulai dari bahan makanan segar, produk rumah tangga, hingga kebutuhan pribadi.
                    </p>
                    <div class="flex flex-wrap justify-center gap-3">
                        <a href="products" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Barang Pokok</a>
                        <a href="products-2" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">Makanan dan Minuman</a>
                        <a href="products-3" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Pakaian</a>
                    </div>
                </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
