<?= $this->include('templates/header') ?>
<?= $this->include('templates/sidebar') ?>

<main class="p-8 sm:ml-64">
    <!-- Header -->
    <header class="mb-8 mt-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Paket Perjalanan</h1>
        <p class="text-gray-600 mb-8">Kelola paket perjalanan anda</p>
    </header>

    <!-- Quick Stats -->
    <section class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
    <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
                <h2 class="text-xl font-semibold mb-4">Tambah Paket Baru</h2>
                <form action="<?= base_url('/admin/paket/save') ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <div>
                            <label for="nama_paket" class="block text-sm font-medium text-gray-700 mb-2">Nama Paket</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status Publikasi</label>
                            <div class="flex items-center space-x-6">
                                <label class="flex items-center">
                                    <input type="radio" name="status" value="active" class="text-primary focus:ring-primary">
                                    <span class="ml-2">Published</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="status" value="inactive" class="text-primary focus:ring-primary" checked>
                                    <span class="ml-2">Draft</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Paket</label>
                        <div class="file-drop-area">
                            <span class="fake-btn">Pilih Gambar</span>
                            <span class="file-msg">atau seret file ke sini</span>
                            <input type="file" id="image" name="image" class="file-input" accept=".jpg,.jpeg,.png" required>
                        </div>
                        <div id="image-preview" class="mt-4 hidden">
                            <img src="" alt="Preview" class="max-w-xs rounded-lg shadow-md">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Simpan Paket
                        </button>
                    </div>
                </form>
            </div>
    </section>
</main>


<?= $this->include('templates/footer') ?>
   