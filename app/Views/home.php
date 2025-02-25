<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data['title']) ? $data['title'] : 'Anmar Binawisata' ?></title>
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
        .text-3d {
            position: relative;
            text-shadow: 
                0 2px 1px rgba(255,255,255,0.9),
                0 -4px 6px rgba(0,40,0,0.3),
                3px 5px 5px rgba(0,60,0,0.25),
                -2px -2px 4px rgba(255,255,255,0.4),
                0 0 10px rgba(22, 163, 74, 0.3);
            transform: perspective(500px) rotateX(15deg);
            background: linear-gradient(
                to bottom,
                #0fa968 0%,
                #0d8a3d 30%,
                #075c27 70%,
                #033817 100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-stroke: 0.8px rgba(0,40,0,0.3);
            color: transparent;
            animation: text-float 3s ease-in-out infinite;
            filter: drop-shadow(0 2px 1px rgba(0,0,0,0.1));
        }

        @keyframes text-float {
            0%, 100% {
                transform: perspective(500px) rotateX(15deg) translateY(0);
                text-shadow: 
                    0 2px 1px rgba(255,255,255,0.9),
                    0 -4px 6px rgba(0,40,0,0.3),
                    3px 5px 5px rgba(0,60,0,0.25),
                    -2px -2px 4px rgba(255,255,255,0.4),
                    0 0 10px rgba(22, 163, 74, 0.3);
            }
            50% {
                transform: perspective(500px) rotateX(15deg) translateY(-3px);
                text-shadow: 
                    0 3px 2px rgba(255,255,255,0.95),
                    0 -6px 8px rgba(0,40,0,0.4),
                    5px 8px 8px rgba(0,60,0,0.35),
                    -3px -3px 5px rgba(255,255,255,0.5),
                    0 0 15px rgba(22, 163, 74, 0.4);
            }
        }

        .text-3d:hover {
            filter: 
                drop-shadow(0 3px 2px rgba(0,0,0,0.15))
                brightness(1.05);
            -webkit-text-stroke: 0.8px rgba(0,40,0,0.4);
            animation: none;
        }
    </style>
</head>
<body class="bg-gray-50 shadow-md">
    <div class="max-w-[540px] mx-auto min-h-screen relative pb-16">
        <!-- Navbar -->
        <nav class="bg-white shadow-md">
            <div class="flex justify-between items-center px-4 py-3">
                <div class="flex items-center">
                    <img src="<?= base_url('/assets/images/logo.png') ?>" alt="Logo" class="w-8 h-8 mr-2">
                    <h1 class="text-2xl text-green-600 font-bold">
                        <?= $data['information']['name'] ?>demo1
                    </h1>
                </div>
            </div>
        </nav>

    
        <div class="jam bg-white rounded-xl shadow-md p-4 mx-4 mb-4 mt-6">
        <div class="grid grid-cols-2 gap-4">
            <!-- Makassar Time -->
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">
                    <i class="fas fa-clock text-green-600 mr-1"></i>
                    Waktu Makassar
                </div>
                <div class="text-xl font-bold text-gray-800" id="makassarTime"></div>
                <div class="text-xs text-gray-500" id="makassarDate"></div>
            </div>
            <!-- Mecca Time -->
            <div class="text-center">
                <div class="text-sm text-gray-600 mb-1">
                    <i class="fas fa-mosque text-green-600 mr-1"></i>
                    Waktu Mekkah
                </div>
                <div class="text-xl font-bold text-gray-800" id="meccaTime"></div>
                <div class="text-xs text-gray-500" id="meccaDate"></div>
            </div>
        </div>
    </div>
<div class="relative px-4 mt-6">
    <div class="rounded-xl overflow-hidden">
        <div class="relative">
            <!-- Slider container -->
            <div class="slider-container flex transition-transform duration-500 ease-in-out">
                <img src="<?= base_url('/assets/images/kaaba.jpg') ?>" alt="Kaaba" class="w-full h-48 object-cover flex-shrink-0">
                <img src="<?= base_url('/assets/images/madinah.jpg') ?>" alt="Madinah" class="w-full h-48 object-cover flex-shrink-0">
                <img src="<?= base_url('/assets/images/makkah.jpg') ?>" alt="Makkah" class="w-full h-48 object-cover flex-shrink-0">
            </div>
            
            <!-- Navigation Arrows -->
            <button onclick="prevSlide()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/75 p-2 rounded-full">
                <i class="fas fa-chevron-left text-green-600"></i>
            </button>
            <button onclick="nextSlide()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/75 p-2 rounded-full">
                <i class="fas fa-chevron-right text-green-600"></i>
            </button>
        </div>
    </div>
    <!-- Dots Navigation -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <button onclick="goToSlide(0)" class="w-2 h-2 rounded-full bg-green-600 slider-dot"></button>
        <button onclick="goToSlide(1)" class="w-2 h-2 rounded-full bg-white/60 slider-dot"></button>
        <button onclick="goToSlide(2)" class="w-2 h-2 rounded-full bg-white/60 slider-dot"></button>
    </div>
</div>

<!-- Add this JavaScript before the closing body tag -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelector('.slider-container');
        const dots = document.querySelectorAll('.slider-dot');
        const totalSlides = 3;

        function updateSlider() {
            slides.style.transform = `translateX(-${currentSlide * 100}%)`;
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-green-600', index === currentSlide);
                dot.classList.toggle('bg-white/60', index !== currentSlide);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        function goToSlide(n) {
            currentSlide = n;
            updateSlider();
        }

        // Auto-advance slides
        setInterval(nextSlide, 5000);
    </script>

        <!-- Menu Grid -->
        <div class="px-4 mt-8">
            <div class="grid grid-cols-4 gap-4">
                <!-- Tentang -->
                <a href="tentang" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-bullhorn text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Tentang</span>
                    </div>
                </a>
                <!-- Legalitas -->
                <a href="legalitas" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-file-alt text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Legalitas</span>
                    </div>
                </a>
                <!-- Layanan -->
                <a href="layanan" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-handshake text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Layanan</span>
                    </div>
                </a>
                <!-- Paket -->
                <a href="paket" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-box text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Paket</span>
                    </div>
                </a>
                <!-- Rekening -->
                <a href="rekening" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-wallet text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Rekening</span>
                    </div>
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/anmar_binawisata/" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fab fa-instagram text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Instagram</span>
                    </div>
                </a>
                <!-- Kontak -->
                <a href="kontak" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-headset text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Kontak</span>
                    </div>
                </a>
                <!-- Kantor -->
                <a href="kantor" class="group">
                    <div class="flex flex-col items-center transform transition-all duration-300 hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 hover:from-green-400 hover:to-green-600 rounded-xl flex items-center justify-center text-white mb-1 shadow-md transition-all duration-300 hover:shadow-lg group-hover:rotate-3">
                            <i class="fas fa-building text-xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <span class="text-green-600 text-sm font-medium group-hover:text-green-500 transition-colors duration-300">Kantor</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Greeting Card -->
        <div class="px-4 mt-6">
            
            <div class="bg-white rounded-xl">
                <div class="mx-auto max-w-7xl px-1 sm:px-1 lg:px-1">
                    <div class="mx-auto max-w-2xl py-1 sm:py-1 lg:max-w-none lg:py-1">
                        <div class="mt-5 grid grid-cols-1 gap-1">
                            <?php foreach ($data['packages'] as $package): ?>
                                <div class="group relative mb-10">
                                <img src="assets/uploads/paket/<?php echo htmlspecialchars($package['image']); ?>" 
                                    alt="<?php echo htmlspecialchars($package['name']); ?>"
                                    class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-50 sm:aspect-[2/1] lg:aspect-square">
                                    <h2 class="mt-2 text-center text-xl text-black-500 font-semibold">
                                        <a href="#">
                                        <span class="absolute inset-0"></span>
                                        <?php echo htmlspecialchars($package['name']); ?>
                                        </a>
                                    </h2>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation Bar -->
        <?= $this->include('navbar') ?>
    </div>
    
    <div class="text-center leading-8" style="padding-bottom: 50px">
        <p>Copyright 2025 PT Anmar Binawisata</p>
    </div>

    <script>
        // Hijri Date Converter
        function gregorianToHijri(date) {
            const gregorianYear = date.getFullYear();
            const gregorianMonth = date.getMonth();
            const gregorianDate = date.getDate();
            
            let jd = intPart((1461 * (gregorianYear + 4800 + intPart((gregorianMonth - 14) / 12))) / 4) +
                intPart((367 * (gregorianMonth - 2 - 12 * intPart((gregorianMonth - 14) / 12))) / 12) -
                intPart((3 * intPart((gregorianYear + 4900 + intPart((gregorianMonth - 14) / 12)) / 100)) / 4) +
                gregorianDate - 32075;

            let l = jd - 1948440 + 10632;
            let n = intPart((l - 1) / 10631);
            l = l - 10631 * n + 354;
            let j = (intPart((10985 - l) / 5316)) * (intPart((50 * l) / 17719)) + (intPart(l / 5670)) * (intPart((43 * l) / 15238));
            l = l - (intPart((30 - j) / 15)) * (intPart((17719 * j) / 50)) - (intPart(j / 16)) * (intPart((15238 * j) / 43)) + 29;
            
            let month = intPart((24 * l) / 709);
            let day = l - intPart((709 * month) / 24);
            let year = 30 * n + j - 30;

            return {
                day: day,
                month: month - 1,
                year: year
            };
        }

        function intPart(floatNum) {
            if (floatNum < -0.0000001) {
                return Math.ceil(floatNum - 0.0000001);
            }
            return Math.floor(floatNum + 0.0000001);
        }

        const hijriMonths = [
            "Muharram", "Safar", "Rabiul Awal", "Rabiul Akhir",
            "Jumadil Awal", "Jumadil Akhir", "Rajab", "Sya'ban",
            "Ramadhan", "Syawal", "Dzulqaidah", "Dzulhijjah"
        ];

        const hijriDays = [
            "Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"
        ];

        function updateTime() {
            const now = new Date();
            
            // Makassar Time (WITA/UTC+8)
            const makassarTime = new Date(now.getTime());
            const makassarTimeString = makassarTime.toLocaleTimeString('id-ID', { 
                timeZone: 'Asia/Makassar',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            const makassarDateString = makassarTime.toLocaleDateString('id-ID', {
                timeZone: 'Asia/Makassar',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            // Mecca Time (UTC+3)
            const meccaTime = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Riyadh' }));
            const meccaTimeString = meccaTime.toLocaleTimeString('id-ID', { 
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            // Convert to Hijri
            const hijriDate = gregorianToHijri(meccaTime);
            const hijriDay = hijriDays[meccaTime.getDay()];
            const meccaDateString = `${hijriDay}, ${hijriDate.day} ${hijriMonths[hijriDate.month]} ${hijriDate.year}H`;

            // Update DOM
            document.getElementById('makassarTime').textContent = makassarTimeString;
            document.getElementById('makassarDate').textContent = makassarDateString;
            document.getElementById('meccaTime').textContent = meccaTimeString;
            document.getElementById('meccaDate').textContent = meccaDateString;
        }

        // Update time every second
        updateTime();
        setInterval(updateTime, 1000);
    </script>
</body>
</html>