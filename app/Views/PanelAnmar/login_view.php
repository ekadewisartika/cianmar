<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Anmar Binawisata</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#099268',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            cursor: pointer;
        }
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 45%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 55%
            );
            transform: translateX(-100%);
            transition: all 0.6s;
        }
        .btn-shine:hover::after {
            transform: translateX(100%);
        }
        @media (max-width: 640px) {
            input, button {
                font-size: 16px !important; /* Prevents zoom on iOS */
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg w-full max-w-[340px] sm:w-96">
            <!-- Logo and Company Name -->
            <div class="text-center mb-6 sm:mb-8">
                <div class="mb-3 sm:mb-4">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 mx-auto bg-gradient-to-br from-primary to-emerald-500 rounded-full flex items-center justify-center transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <span class="text-white text-2xl sm:text-3xl font-bold">AB</span>
                    </div>
                </div>
                <h1 class="text-xl sm:text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-emerald-500">Anmar Binawisata</h1>
            </div>

            
            <!-- <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
               
            </div> -->

            <?php if(session()->get('error')): ?>
                <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <?php echo session()->get('error'); ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="<?php echo site_url('/admin'); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="space-y-4">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Pengguna</label>
                        <input type="text" id="username" name="username" required
                            class="mt-1 block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary focus:border-primary transition duration-300">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                        <input type="password" id="password" name="password" required
                            class="mt-1 block w-full px-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-primary focus:border-primary transition duration-300">
                    </div>
                    <div class="pt-2">
                        <button type="submit"
                            class="btn-shine w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-base font-medium text-white bg-gradient-to-r from-primary to-emerald-500 hover:shadow-lg transform transition-all duration-300 hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary active:scale-95">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>