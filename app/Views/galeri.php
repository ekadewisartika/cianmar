<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto - Appanmar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        .pattern-grid-lg {
            background-image: radial-gradient(circle, #000 1px, transparent 1px);
            background-size: 20px 20px;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="max-w-[540px] mx-auto min-h-screen relative pb-16">
        <!-- Back Button & Title -->
        <div class="bg-white shadow-md px-4 py-3 flex items-center sticky top-0 z-50">
            <a href="home" class="text-green-600 mr-4">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h1 class="text-xl font-semibold text-green-600">Galeri Foto</h1>
        </div>

        <!-- Decorative Header -->
        <div class="relative overflow-hidden bg-gradient-to-br from-green-50 to-green-100">
            <!-- Background Pattern -->
            <div class="absolute inset-0 pattern-grid-lg opacity-5"></div>
            
            <!-- Content -->
            <div class="px-4 py-8 text-center relative">
                <div class="inline-block p-4 bg-white rounded-full shadow-lg mb-4 animate-[float_3s_ease-in-out_infinite]">
                    <i class="fas fa-camera text-3xl text-green-600"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-3">Kenangan Perjalanan</h2>
                <p class="text-gray-600 text-sm max-w-md mx-auto mb-6">
                    Momen-momen berharga dalam setiap perjalanan ibadah dan wisata halal bersama Appanmar
                </p>
                <!-- Decorative Icons -->
                <div class="flex justify-center gap-8 text-green-500 opacity-20">
                    <i class="fas fa-mosque text-3xl"></i>
                    <i class="fas fa-kaaba text-3xl"></i>
                    <i class="fas fa-star-and-crescent text-3xl"></i>
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="px-4 py-2">
            <div class="grid grid-cols-2 gap-4">
                <!-- Gallery Item 1 -->
                <a href="assets/galery/fotogalery (1).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (1).jpeg" alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 2 -->
                <a href="assets/galery/fotogalery (2).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (2).jpeg" alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 3 -->
                <a href="assets/galery/fotogalery (3).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (3).jpeg" alt="Gallery 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 4 -->
                <a href="assets/galery/fotogalery (4).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (4).jpeg" alt="Gallery 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 5 -->
                <a href="assets/galery/fotogalery (5).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (5).jpeg" alt="Gallery 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 6 -->
                <a href="assets/galery/fotogalery (6).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (6).jpeg" alt="Gallery 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 7 -->
                <a href="assets/galery/fotogalery (7).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (7).jpeg" alt="Gallery 7" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 8 -->
                <a href="assets/galery/fotogalery (8).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (8).jpeg" alt="Gallery 8" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 9 -->
                <a href="assets/galery/fotogalery (9).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (9).jpeg" alt="Gallery 9" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 10 -->
                <a href="assets/galery/fotogalery (10).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (10).jpeg" alt="Gallery 10" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 11 -->
                <a href="assets/galery/fotogalery (11).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (11).jpeg" alt="Gallery 11" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 12 -->
                <a href="assets/galery/fotogalery (12).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (12).jpeg" alt="Gallery 12" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>

                <!-- Gallery Item 13 -->
                <a href="assets/galery/fotogalery (13).jpeg" data-lightbox="gallery" data-title="Galeri Anmar Binawisata" class="block">
                    <div class="relative group overflow-hidden rounded-lg shadow-md aspect-square">
                        <img src="assets/galery/fotogalery (13).jpeg" alt="Gallery 13" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-2xl"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Gambar %1 dari %2"
        });
    </script>
</body>
</html>
