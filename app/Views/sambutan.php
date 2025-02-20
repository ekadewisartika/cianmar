<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan - Anmar Binawisata</title>
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
            <h1 class="text-xl font-semibold text-green-600">Sambutan Direktur</h1>
        </div>

        <div class="p-4">
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex flex-col items-center mb-6">
                    <div class="w-24 h-24 rounded-full bg-green-100 flex items-center justify-center mb-4">
                        <i class="fas fa-user-tie text-4xl text-green-600"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">H. Mukhlis Jafar</h2>
                    <p class="text-gray-600">Direktur Utama PT Anmar Binawisata</p>
                </div>

                <div class="space-y-4 text-gray-600">
                    <p class="leading-relaxed">
                        <span class="font-semibold text-green-600">Assalamualaikum Wr. Wb.</span>
                    </p>

                    <div class="bg-green-50 rounded-lg p-6 my-6">
                        <div class="text-right mb-3">
                            <p class="text-xl font-arabic text-gray-800">وَأَذِّن فِي النَّاسِ بِالْحَجِّ يَأْتُوكَ رِجَالًا وَعَلَىٰ كُلِّ ضَامِرٍ يَأْتِينَ مِن كُلِّ فَجٍّ عَمِيقٍ</p>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">
                            "Dan berserulah kepada manusia untuk mengerjakan haji, niscaya mereka akan datang kepadamu dengan berjalan kaki, dan mengendarai unta yang kurus yang datang dari segenap penjuru yang jauh."
                        </p>
                        <p class="text-xs text-gray-500">- QS. Al-Hajj: 27</p>
                    </div>

                    <p class="leading-relaxed">
                        Saya memulai perjalanan ini lebih dari 20 tahun lalu dengan sebuah mimpi sederhana: menjadi jembatan bagi setiap Muslim Indonesia untuk mencapai tanah suci. Bukan sekadar mengantarkan, tapi menghadirkan pengalaman spiritual yang tak terlupakan.
                    </p>

                    <p class="leading-relaxed">
                        Di Anmar Binawisata, kami memahami bahwa perjalanan ke Baitullah bukan sekadar wisata - ini adalah perjalanan seumur hidup yang mengubah hati dan jiwa. Setiap detail kami perhatikan, dari pemilihan hotel terdekat dengan Masjidil Haram hingga pembimbing yang tidak hanya berpengalaman, tapi juga memahami nilai spiritual perjalanan ini.
                    </p>

                    <blockquote class="border-l-4 border-green-600 pl-4 my-6 italic">
                        "Kami tidak hanya mengantarkan Anda ke Baitullah, kami menemani perjalanan spiritual Anda dengan penuh dedikasi dan kehangatan."
                    </blockquote>

                    <p class="leading-relaxed">
                        Ribuan jamaah telah kami antarkan, dan setiap cerita mereka menjadi bagian dari perjalanan kami. Kepercayaan Anda adalah amanah yang kami jaga dengan sepenuh hati.
                    </p>

                     <!-- Hadith Quote 1 -->
                     <div class="bg-gray-50 rounded-lg p-6 my-6">
                        <p class="text-sm text-gray-600 mb-2 italic">
                            "Umrah ke Umrah berikutnya adalah penghapus dosa di antara keduanya, dan haji yang mabrur tidak ada balasannya kecuali surga."
                        </p>
                        <p class="text-xs text-gray-500">- HR. Bukhari & Muslim</p>
                    </div>

                    <p class="leading-relaxed">
                        Mari wujudkan impian spiritual Anda bersama keluarga besar Anmar Binawisata. InsyaAllah, kami siap mendampingi langkah suci Anda menuju Baitullah.
                    </p>

                    <p class="mt-6">
                        <span class="font-semibold text-green-600">Wassalamualaikum Wr. Wb.</span>
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <div class="flex items-center justify-center space-x-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600">15+</div>
                            <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600">10k+</div>
                            <div class="text-sm text-gray-600">Jamaah Terlayani</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600">98%</div>
                            <div class="text-sm text-gray-600">Tingkat Kepuasan</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Button -->
            <div class="mt-6 text-center">
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
