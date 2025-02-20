<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data['title']) ? $data['title'] : 'Anmar Binawisata' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="max-w-[540px] mx-auto min-h-screen relative pb-16">
        <!-- Back Button & Title -->
        <div class="bg-white shadow-md px-4 py-3 flex items-center sticky top-0 z-50">
            <a href="home" class="text-green-600 mr-4">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h1 class="text-xl font-semibold text-green-600">Layanan Kami</h1>
        </div>

        <!-- Hero Section -->
        <div class="relative h-40 bg-gradient-to-br from-green-600 to-green-700 overflow-hidden">
            <div class="absolute inset-0 bg-[url('assets/images/pattern.png')] opacity-10"></div>
            <div class="relative h-full flex items-center px-6">
                <div class="text-white">
                    <h2 class="text-2xl font-bold mb-2">Layanan Terbaik</h2>
                    <p class="text-green-100">Memberikan pengalaman ibadah yang berkesan</p>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="p-4">
            <!-- Main Services -->
            <div class="grid gap-4 mb-6">
                <!-- Umrah Service -->
                <div class="bg-white rounded-xl p-4 shadow-sm group hover:shadow-md transition-all">
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mr-4 group-hover:scale-105 transition-transform">
                            <i class="fas fa-kaaba text-2xl text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Umrah Regular</h3>
                            <p class="text-gray-600 text-sm mb-3">Program umrah dengan pelayanan terbaik dan pembimbing berpengalaman.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">9 Hari</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Hotel *4</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Visa Umrah</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Haji Service -->
                <div class="bg-white rounded-xl p-4 shadow-sm group hover:shadow-md transition-all">
                    <div class="flex items-start">
                        <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mr-4 group-hover:scale-105 transition-transform">
                            <i class="fas fa-mosque text-2xl text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Haji Khusus</h3>
                            <p class="text-gray-600 text-sm mb-3">Program haji khusus dengan fasilitas premium dan pendampingan penuh.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">25 Hari</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Hotel *5</span>
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs">Visa Haji</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Layanan Tambahan</h3>
            <div class="grid grid-cols-2 gap-4">
                <!-- Visa Processing -->
                <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-passport text-xl text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-1">Proses Visa</h4>
                    <p class="text-sm text-gray-600">Pengurusan visa cepat dan aman</p>
                </div>

                <!-- Hotel Booking -->
                <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-hotel text-xl text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-1">Hotel</h4>
                    <p class="text-sm text-gray-600">Akomodasi nyaman & strategis</p>
                </div>

                <!-- Transportation -->
                <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-bus text-xl text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-1">Transportasi</h4>
                    <p class="text-sm text-gray-600">Armada modern & nyaman</p>
                </div>

                <!-- Guide -->
                <div class="bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-3">
                        <i class="fas fa-user-tie text-xl text-green-600"></i>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-1">Muthowif</h4>
                    <p class="text-sm text-gray-600">Pembimbing berpengalaman</p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-8 bg-gradient-to-br from-green-600 to-green-700 rounded-xl p-6 text-center">
                <h3 class="text-xl font-bold text-white mb-2">Siap Berangkat?</h3>
                <p class="text-green-100 mb-4">Konsultasikan perjalanan ibadah Anda bersama kami</p>
                <a href="tel:<?= $data['information']['phone1'] ?>" class="inline-flex items-center justify-center px-6 py-2 bg-white text-green-600 rounded-full hover:bg-green-50 transition-colors">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>
