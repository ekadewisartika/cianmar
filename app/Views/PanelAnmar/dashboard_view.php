<?= $this->include('templates/header') ?>
<?= $this->include('templates/sidebar') ?>

<main class="p-8 sm:ml-64">
    <!-- Header -->
    <header class="mb-8 mt-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Selamat Datang, Administrator!</h1>
        <p class="text-gray-600 mb-8">Selamat datang di dashboard admin AnmarBinawisata</p>
    </header>

    <!-- Quick Stats -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                    <i class="fas fa-box"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-600">Total Paket</p>
                    <h3 class="text-lg font-semibold text-gray-800">7</h3>
                </div>
            </div>
        </div>
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-500">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-600">Paket Aktif</p>
                    <h3 class="text-lg font-semibold text-gray-800">7</h3>
                </div>
            </div>
        </div>
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="ml-3">
                    <p class="text-gray-600">Draft</p>
                    <h3 class="text-lg font-semibold text-gray-800">0</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section>
        <h2 class="text-lg font-semibold text-gray-800 mb-2">Aksi Cepat</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="quick-action-card bg-white rounded-xl shadow-sm p-4 flex items-center justify-between hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-gray-800">Tambah Paket Baru</h3>
                        <p class="text-gray-600 text-sm">Buat dan publikasikan paket wisata baru</p>
                    </div>
                </div>
                <i class="fas fa-chevron-right text-gray-400"></i>
            </a>
            <a href="#" class="quick-action-card bg-white rounded-xl shadow-sm p-4 flex items-center justify-between hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-semibold text-gray-800">Pengaturan</h3>
                        <p class="text-gray-600 text-sm">Kelola pengaturan sistem</p>
                    </div>
                </div>
                <i class="fas fa-chevron-right text-gray-400"></i>
            </a>
        </div>
    </section>
</main>


<?= $this->include('templates/footer') ?>
   