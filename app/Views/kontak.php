<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Anmar Binawisata</title>
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
            <h1 class="text-xl font-semibold text-green-600">Hubungi Kami</h1>
        </div>

        <div class="p-4 space-y-6">
            <!-- Quick Contact -->
            <div class="grid grid-cols-2 gap-4">
                <a href="https://wa.me/<?= $data['information']['whatsapp'] ?>" class="bg-green-600 rounded-xl p-4 text-white hover:bg-green-700 transition-colors">
                    <div class="flex flex-col items-center text-center">
                        <i class="fab fa-whatsapp text-3xl mb-2"></i>
                        <span class="font-medium">WhatsApp</span>
                        <span class="text-sm text-green-100">Fast Response</span>
                    </div>
                </a>
                <a href="tel:<?= $data['information']['phone1'] ?>" class="bg-blue-600 rounded-xl p-4 text-white hover:bg-blue-700 transition-colors">
                    <div class="flex flex-col items-center text-center">
                        <i class="fas fa-phone-alt text-3xl mb-2"></i>
                        <span class="font-medium">Telepon</span>
                        <span class="text-sm text-blue-100">Layanan 24 Jam</span>
                    </div>
                </a>
            </div>

            <!-- Contact Form -->
            <!-- <div class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Kirim Pesan</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">No. WhatsApp</label>
                        <input type="tel" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                        <textarea rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-600 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="w-full py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        Kirim Pesan
                    </button>
                </form>
            </div> -->

            <!-- Contact Info -->
            <div class="space-y-4">
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-envelope text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Email</h3>
                            <a href="mailto:<?= $data['information']['email'] ?>" class="text-green-600 text-sm"><?= $data['information']['email'] ?></a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Jam Operasional</h3>
                            <p class="text-sm text-gray-600">Senin - Sabtu: 08:00 - 17:00</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fab fa-instagram text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Instagram</h3>
                            <a href="https://instagram.com/<?= $data['information']['instagram'] ?>" class="text-green-600 text-sm">@<?= $data['information']['instagram'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
</body>
</html>
