<?= $this->include('templates/header') ?>
<?= $this->include('templates/sidebar') ?>

<main class="p-8 sm:ml-64">
    <header class="mb-8 mt-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Pengaturan Perusahaan</h1>
        <p class="text-gray-600 mb-8">Kelola informasi kontak dan media sosial perusahaan</p>
    </header>

    <!-- Notifikasi -->
    <?php if (session('errors')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            <?php foreach (session('errors') as $error): ?>
            <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
    <?php endif ?>
    
    <?php if (session('message')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        <?= esc(session('message')) ?>
    </div>
    <?php endif ?>

    <section class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-6">
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <h2 class="text-xl font-semibold mb-4">Form Pengaturan</h2>
            <form action="<?= base_url('/admin/pengaturan/update') ?>" method="POST">
                <input type="hidden" name="_method" value="PUT" />
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Informasi Perusahaan -->
                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Perusahaan</label>
                            <input type="text" id="name" name="name" required
                                value="<?= old('name', $settings['name'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>

                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                            <textarea id="address" name="address" rows="3" required
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20"><?= old('address', $settings['address'] ?? '') ?></textarea>
                        </div>

                        <div>
                            <label for="maps_link" class="block text-sm font-medium text-gray-700 mb-2">Link Google Maps</label>
                            <input type="url" id="maps_link" name="maps_link"
                                value="<?= old('maps_link', $settings['maps_link'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>
                    </div>

                    <!-- Informasi Kontak -->
                    <div class="space-y-6">
                        <div>
                            <label for="phone1" class="block text-sm font-medium text-gray-700 mb-2">Nomor HP</label>
                            <input type="tel" id="phone1" name="phone1" required
                                value="<?= old('phone1', $settings['phone1'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>

                        <div>
                            <label for="phone2" class="block text-sm font-medium text-gray-700 mb-2">Telepon Kantor</label>
                            <input type="tel" id="phone2" name="phone2"
                                value="<?= old('phone2', $settings['phone2'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                value="<?= old('email', $settings['email'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>

                        <div>
                            <label for="whatsapp" class="block text-sm font-medium text-gray-700 mb-2">WhatsApp</label>
                            <input type="tel" id="whatsapp" name="whatsapp" required
                                value="<?= old('whatsapp', $settings['whatsapp'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>
                    </div>
                </div>

                <!-- Media Sosial -->
                <div class="border-t pt-6">
                    <h2 class="text-xl font-semibold mb-6">Media Sosial</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="instagram" class="block text-sm font-medium text-gray-700 mb-2">Instagram</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500">
                                    @
                                </span>
                                <input type="text" id="instagram" name="instagram"
                                    value="<?= old('instagram', $settings['instagram'] ?? '') ?>"
                                    class="flex-1 px-4 py-2 rounded-r-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                            </div>
                        </div>

                        <div>
                            <label for="facebook" class="block text-sm font-medium text-gray-700 mb-2">Facebook</label>
                            <input type="text" id="facebook" name="facebook"
                                value="<?= old('facebook', $settings['facebook'] ?? '') ?>"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-6">
                    <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                        Simpan Pengaturan
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>

<?= $this->include('templates/footer') ?>