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
            <h1 class="text-xl font-semibold text-green-600">Lokasi Kantor</h1>
        </div>

        <!-- Map Section -->
        <div class="relative h-64">
            <iframe 
                src="<?= $data['information']['maps_link'] ?>" 
                class="w-full h-full"
                style="border:5px;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

        <div class="p-4 space-y-6">
            <!-- Office Info -->
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-building text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 mb-1">Kantor Pusat</h2>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?= $data['information']['address'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-2 gap-4">
                <a href="https://maps.app.goo.gl/28NrQ2gC573Kz5G99" class="bg-green-600 rounded-xl p-4 text-white hover:bg-green-700 transition-colors">
                    <div class="flex flex-col items-center text-center">
                        <i class="fas fa-map-marker-alt text-3xl mb-2"></i>
                        <span class="font-medium">Petunjuk Arah</span>
                        <span class="text-sm text-green-100">via Google Maps</span>
                    </div>
                </a>
                <a href="tel:<?= $data['information']['phone1'] ?>" class="bg-blue-600 rounded-xl p-4 text-white hover:bg-blue-700 transition-colors">
                    <div class="flex flex-col items-center text-center">
                        <i class="fas fa-phone-alt text-3xl mb-2"></i>
                        <span class="font-medium">Hubungi</span>
                        <span class="text-sm text-blue-100">Kantor Pusat</span>
                    </div>
                </a>
            </div>

            <!-- Additional Info -->
            <div class="space-y-4">
                <!-- Operating Hours -->
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-green-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Jam Operasional</h3>
                    </div>
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex justify-between">
                            <span>Senin - Jumat</span>
                            <span>08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sabtu</span>
                            <span>09:00 - 15:00</span>
                        </div>
                        <div class="flex justify-between text-red-500">
                            <span>Minggu</span>
                            <span>Tutup</span>
                        </div>
                    </div>
                </div>

                <!-- Transportation -->
                <!-- <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-bus text-green-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Akses Transportasi</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>5 menit dari Halte Bus Darmo</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>10 menit dari Stasiun Wonokromo</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                            <span>Tersedia parkir mobil & motor</span>
                        </li>
                    </ul>
                </div> -->
            </div>

            <!-- Contact Support -->
            <div class="bg-green-50 rounded-xl p-4 text-center">
                <p class="text-gray-600 mb-3">Butuh bantuan menemukan lokasi?</p>
                <a href="https://wa.me/<?= $data['information']['whatsapp'] ?>" class="inline-flex items-center justify-center px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Hubungi Admin
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>
