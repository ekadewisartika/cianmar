<!-- Sidebar -->
<aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-primary">
        <div class="mb-8 mt-4">
            <div class="flex items-center justify-center mb-4">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                    <span class="text-primary text-2xl font-bold">AB</span>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-white text-lg font-semibold">Anmar Binawisata</h2>
                <p class="text-green-100 text-sm"><?= session('nama') ?? 'Administrator' ?></p>
            </div>
        </div>
        
        <ul class="space-y-2 font-medium">
            <li>
                <a href="<?= base_url('/admin/dashboard') ?>" class="js-dashboard flex items-center p-3 text-white rounded-lg hover:bg-green-600 group">
                    <i class="fas fa-home w-5 h-5 transition duration-75"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/paket') ?>" class="js-paket flex items-center p-3 text-white rounded-lg hover:bg-green-600 group">
                    <i class="fas fa-box w-5 h-5 transition duration-75"></i>
                    <span class="ms-3">Paket Wisata</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/pengaturan') ?>" class="js-pengaturan flex items-center p-3 text-white rounded-lg hover:bg-green-600 group">
                    <i class="fas fa-cog w-5 h-5 transition duration-75"></i>
                    <span class="ms-3">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/admin/ubah-password') ?>" class="js-ubah-password flex items-center p-3 text-white rounded-lg hover:bg-green-600 group">
                    <i class="fas fa-key w-5 h-5 transition duration-75"></i>
                    <span class="ms-3">Ubah Password</span>
                </a>
            </li>
            <li class="mt-8">
                <a href="<?= base_url('/admin/logout') ?>" class="flex items-center p-3 text-white rounded-lg hover:bg-red-600 group">
                    <i class="fas fa-sign-out-alt w-5 h-5 transition duration-75"></i>
                    <span class="ms-3">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- Mobile Nav Toggle -->
<div class="fixed top-0 left-0 z-50 p-4 sm:hidden">
    <button type="button" onclick="toggleSidebar()" class="text-gray-600 hover:text-gray-900">
        <i class="fas fa-bars text-2xl"></i>
    </button>
</div>