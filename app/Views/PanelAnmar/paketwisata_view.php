<?= $this->include('templates/header') ?>
<?= $this->include('templates/sidebar') ?>

<main class="p-8 sm:ml-64">
    <!-- Header -->
    <header class="mb-8 mt-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Paket Perjalanan</h1>
        <p class="text-gray-600 mb-8">Kelola paket perjalanan anda</p>
    </header>

    <section class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-6">
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <div class="overflow-x-auto">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Daftar Paket Wisata</h2>
                    <a href="<?= base_url('admin/paket/create') ?>" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                        New Data
                    </a>
                </div>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">No</th>
                            <th class="py-3 px-6 text-left">Thumbnail</th>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <?php $i=1;?>
                        <?php if (!empty($paket)): ?>
                            <?php foreach ($paket as $item): ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                    <td class="py-3 px-6 text-left"><?= $i++; ?></td>
                                    <td class="py-3 px-6 text-left">
                                        <img src="<?= !empty($item['image']) ? base_url('assets/uploads/paket/' . $item['image']) : base_url('assets/images/logo.png') ?>" alt="Thumbnail" class="w-16 h-16 object-cover rounded">
                                    </td>
                                    <td class="py-3 px-6 text-left"><?= esc($item['name']) ?></td>
                                    <td class="py-3 px-6 text-left">
                                        <span class="px-2 py-1 text-sm rounded-full <?= $item['status'] === 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                                            <?= ucfirst($item['status']) ?>
                                        </span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <a href="<?= base_url('admin/paket/edit/' . $item['id']) ?>" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 transition-colors">Edit</a>
                                        <form action="<?= base_url('admin/paket/delete/' . $item['id']) ?>" method="POST" class="inline">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 transition-colors" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="py-4 px-6 text-center text-gray-500">Tidak ada data paket.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?= $this->include('templates/footer') ?>