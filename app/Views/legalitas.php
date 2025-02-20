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
            <h1 class="text-xl font-semibold text-green-600">Legalitas</h1>
        </div>

        <!-- Content -->
        <div class="p-4 space-y-4">
            <!-- Intro Card -->
            <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-xl p-6 text-white">
                <h2 class="text-2xl font-bold mb-2">Legalitas Resmi</h2>
                <p class="opacity-90">Anmar Binawisata telah memiliki izin resmi dari berbagai lembaga terkait untuk menyelenggarakan perjalanan Umrah dan Haji.</p>
            </div>

            <!-- License Cards -->
            <div class="space-y-4">
                <!-- PPIU License -->
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-certificate text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Izin PPIU</h3>
                            <p class="text-sm text-gray-500">Penyelenggara Perjalanan Ibadah Umrah</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Nomor Izin</span>
                            <span class="font-medium text-gray-800">NOMOR U.522 TAHUN 2020</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Berlaku Hingga</span>
                            <span class="font-medium text-gray-800"></span>
                        </div>
                    </div>
                </div>

                <!-- Tourism License -->
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-plane text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Izin PIHK</h3>
                            <p class="text-sm text-gray-500">Penyelenggara Ibadah Haji Khusus</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">Nomor Izin</span>
                            <span class="font-medium text-gray-800">NOMOR 499 Tahun 2021</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Berlaku Hingga</span>
                            <span class="font-medium text-gray-800"></span>
                        </div>
                    </div>
                </div>

                <!-- Company Documents -->
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-file-alt text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Dokumen Perusahaan</h3>
                            <p class="text-sm text-gray-500">Legalitas Badan Usaha</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-gray-600">SIUP</span>
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-gray-600">TDP</span>
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-gray-600">NPWP</span>
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-green-50 rounded-xl p-4">
                <div class="text-center">
                    <h3 class="text-gray-800 font-semibold mb-2">Verifikasi Legalitas</h3>
                    <p class="text-sm text-gray-600 mb-4">Untuk verifikasi legalitas lebih lanjut, silakan hubungi kami</p>
                    <a href="tel:<?= $data['information']['phone1'] ?>" class="inline-flex items-center justify-center px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>
