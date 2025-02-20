
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Umrah & Haji - Anmar Binawisata</title>
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
            <h1 class="text-xl font-semibold text-green-600">Paket Perjalanan</h1>
        </div>

        <!-- Main Content -->
        <div class="p-4">
            <!-- Package Tabs -->
            <div class="flex gap-2 mb-6">
                <button class="flex-1 py-2 px-4 bg-green-600 text-white rounded-full text-sm font-medium">Umrah</button>
                <button class="flex-1 py-2 px-4 bg-gray-200 text-gray-600 rounded-full text-sm font-medium">Haji</button>
            </div>

            <!-- Umrah Section -->
            <div class="bg-white rounded-xl p-6 shadow-sm mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Paket Umrah</h2>
                <div class="space-y-4 text-gray-600">
                    <p class="leading-relaxed">
                        Nikmati perjalanan spiritual ke tanah suci dengan layanan terbaik dari kami. Kami menyediakan berbagai paket Umrah yang dapat disesuaikan dengan kebutuhan Anda.
                    </p>
                    
                    <div class="space-y-3">
                        <h3 class="font-semibold text-gray-800">Layanan Unggulan:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-plane-departure text-green-600"></i>
                                <span>Penerbangan Terjadwal</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-hotel text-green-600"></i>
                                <span>Hotel Dekat Masjid</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-bus text-green-600"></i>
                                <span>Transportasi AC</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-utensils text-green-600"></i>
                                <span>Catering Full Board</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-semibold text-gray-800">Durasi Program:</h3>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Program 9 Hari</li>
                            <li>Program 12 Hari</li>
                            <li>Program Plus Turki/Dubai</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Haji Section -->
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Paket Haji</h2>
                <div class="space-y-4 text-gray-600">
                    <p class="leading-relaxed">
                        Wujudkan impian seumur hidup Anda untuk menunaikan ibadah haji dengan bimbingan dan pelayanan profesional dari tim kami yang berpengalaman.
                    </p>

                    <div class="space-y-3">
                        <h3 class="font-semibold text-gray-800">Fasilitas Utama:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-bed text-green-600"></i>
                                <span>Akomodasi Premium</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-user-tie text-green-600"></i>
                                <span>Pembimbing Berpengalaman</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-book text-green-600"></i>
                                <span>Manasik Haji</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-suitcase text-green-600"></i>
                                <span>Perlengkapan Lengkap</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 bg-green-50 rounded-lg p-4">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-green-600 mt-1 mr-3"></i>
                            <p class="text-sm">
                                Kami menyediakan layanan konsultasi gratis untuk membantu Anda memilih paket yang sesuai dengan kebutuhan. Hubungi kami untuk informasi lebih lanjut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Button -->
            <div class="mt-8 text-center">
                <a href="tel:<?= $data['information']['phone1'] ?>" class="inline-flex items-center justify-center px-6 py-3 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Konsultasi Gratis
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>