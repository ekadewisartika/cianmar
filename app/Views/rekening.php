<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekening - Anmar Binawisata</title>
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
            <h1 class="text-xl font-semibold text-green-600">Rekening Pembayaran</h1>
        </div>

        <div class="p-4 space-y-6">
            <!-- Info Card -->
            <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-xl p-6 text-white">
                <div class="flex items-center mb-4">
                    <i class="fas fa-info-circle text-2xl mr-3"></i>
                    <div>
                        <h3 class="font-bold text-lg">Informasi Pembayaran</h3>
                        <p class="text-green-100 text-sm">Silakan transfer ke rekening resmi kami</p>
                    </div>
                </div>
                <div class="bg-white/10 rounded-lg p-3 text-sm">
                    <ul class="space-y-2">
                        <!-- <li>• Pembayaran DP minimal 50%</li> -->
                        <li>• Konfirmasi setelah transfer</li>
                        <li>• Kirim bukti transfer via WhatsApp</li>
                    </ul>
                </div>
            </div>

            <!-- Bank Accounts -->
            <div class="space-y-4">

                <!-- BCA -->
                <!-- <div class="bg-white rounded-xl p-4 shadow-sm group hover:shadow-md transition-all">
                    <div class="flex items-center mb-4">
                        <img src="assets/images/bca.png" alt="Bank BCA" class="w-16 h-8 object-contain mr-3">
                        <div>
                            <h3 class="font-semibold text-gray-800">Bank BCA</h3>
                            <p class="text-sm text-gray-500">Cabang Surabaya</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">No. Rekening</span>
                            <div class="flex items-center">
                                <span class="font-mono font-medium text-gray-800 mr-2">0987654321</span>
                                <button onclick="copyToClipboard('0987654321')" class="text-green-600 hover:text-green-700">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Atas Nama</span>
                            <span class="font-medium text-gray-800">PT ANMAR BINAWISATA</span>
                        </div>
                    </div>
                </div> -->

                <!-- BSI -->
                <div class="bg-white rounded-xl p-4 shadow-sm group hover:shadow-md transition-all">
                    <div class="flex items-center mb-4">
                        <img src="https://www.bankbsi.co.id/img/logo.png" alt="Bank BSI" class="w-16 h-8 object-contain mr-3">
                        <div>
                            <h3 class="font-semibold text-gray-800">Bank BSI</h3>
                            <p class="text-sm text-gray-500">Cabang Makassar</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">No. Rekening</span>
                            <div class="flex items-center">
                                <span class="font-mono font-medium text-gray-800 mr-2">7250168xxx</span>
                                <button onclick="copyToClipboard('PT. ANMAR BINAWISATA')" class="text-green-600 hover:text-green-700">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Atas Nama</span>
                            <span class="font-medium text-gray-800">PT ANMAR BINAWISATA</span>
                        </div>
                    </div>
                </div>

                <!-- Mandiri -->
                <div class="bg-white rounded-xl p-4 shadow-sm group hover:shadow-md transition-all">
                    <div class="flex items-center mb-4">
                        <img src="https://www.bankmandiri.co.id/image/layout_set_logo?img_id=31567&t=1732986257988" alt="Bank Mandiri" class="w-16 h-8 object-contain mr-3">
                        <div>
                            <h3 class="font-semibold text-gray-800">Bank Mandiri</h3>
                            <p class="text-sm text-gray-500">Cabang Makassar</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm text-gray-600">No. Rekening</span>
                            <div class="flex items-center">
                                <span class="font-mono font-medium text-gray-800 mr-2">152 0007476 xx</span>
                                <button onclick="copyToClipboard('PT. ANMAR BINAWISATA')" class="text-green-600 hover:text-green-700">
                                    <i class="far fa-copy"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Atas Nama</span>
                            <span class="font-medium text-gray-800">PT ANMAR BINAWISATA</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Support -->
            <div class="bg-green-50 rounded-xl p-4 text-center">
                <p class="text-gray-600 mb-3">Butuh bantuan konfirmasi pembayaran?</p>
                <a href="https://wa.me/<?= $data['information']['whatsapp'] ?>" class="inline-flex items-center justify-center px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition-colors">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Hubungi Admin
                </a>
            </div>
        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>

    <script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert('Nomor rekening berhasil disalin!');
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }
    </script>
</body>
</html>
