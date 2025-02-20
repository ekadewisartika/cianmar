<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmar Binawisata</title>
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @keyframes pulse-scale {
            0% { transform: scale(1); opacity: 0.6; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); opacity: 0.6; }
        }
        
        .loading-dots {
            animation: pulse-scale 1.5s infinite ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col items-center justify-center space-y-4">
        <!-- Animated Loading Dots -->
        <div class="flex space-x-2">
            <div class="w-3 h-3 bg-green-600 rounded-full loading-dots" style="animation-delay: 0s"></div>
            <div class="w-3 h-3 bg-green-600 rounded-full loading-dots" style="animation-delay: 0.2s"></div>
            <div class="w-3 h-3 bg-green-600 rounded-full loading-dots" style="animation-delay: 0.4s"></div>
        </div>

        <!-- Text -->
        <div class="text-center space-y-2">
            <h2 class="text-2xl font-bold text-green-600">Anmar Binawisata</h2>
            <p class="text-sm text-gray-600 font-medium">Memuat Pengalaman Terbaik Anda...</p>
        </div>
    </div>

    <script>
        // Redirect ke halaman utama setelah 3 detik
        setTimeout(() => {
            window.location.href = '<?= base_url('/home') ?>';
        }, 3000);
    </script>
</body>
</html>