<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Anmar Binawisata</title>
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            cursor: pointer;
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
            <h1 class="text-xl font-semibold text-green-600">Tentang Kami</h1>
        </div>

        <!-- Hero Section -->
<div class="relative h-48 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-green-800/70 to-transparent flex items-end"> <!-- Updated gradient color -->
        <div class="p-4 text-white">
            <h2 class="text-3xl font-bold mb-1">Anmar Binawisata</h2> <!-- Increased font size -->
            <p class="text-lg opacity-90">Melayani dengan Sepenuh Hati</p> <!-- Increased font size -->
        </div>
    </div>
</div>

        <!-- Content -->
        <div class="p-4 space-y-6">
            <!-- Vision -->
            <div class="bg-white rounded-xl p-4 shadow-sm">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-eye text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Visi Kami</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi perusahaan travel umrah dan haji terpercaya yang mengutamakan kenyamanan dan kekhusyukan ibadah jamaah.
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-xl p-4 shadow-sm">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-bullseye text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Misi Kami</h3>
                </div>
                <ul class="text-gray-600 space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Memberikan pelayanan terbaik dan profesional</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Memastikan keamanan dan kenyamanan jamaah</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Membimbing ibadah sesuai tuntunan yang benar</span>
                    </li>
                </ul>
            </div>

            <!-- Values -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-heart text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Amanah</h4>
                    <p class="text-sm text-gray-600">Menjalankan kepercayaan dengan penuh tanggung jawab</p>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-hands-helping text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Profesional</h4>
                    <p class="text-sm text-gray-600">Pelayanan berkualitas dengan standar tinggi</p>
                </div>
            </div>

            <!-- Company Profile -->
            <div class="bg-white rounded-xl p-4 shadow-sm">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-building text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Profil Perusahaan</h3>
                </div>
                <div class="prose text-gray-600">
                    <p class="mb-3">
                        Anmar Binawisata adalah perusahaan travel umrah dan haji yang berdedikasi untuk memberikan pengalaman ibadah terbaik bagi jamaah.
                    </p>
                    <p>
                        Dengan pengalaman lebih dari 20 tahun, kami telah melayani ribuan jamaah dengan tingkat kepuasan yang tinggi.
                    </p>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>
