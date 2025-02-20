<?= $this->include('templates/header') ?>
<?= $this->include('templates/sidebar') ?>

<main class="p-8 sm:ml-64">
    <!-- Header -->
    <header class="mb-8 mt-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Ubah Password</h1>
        <p class="text-gray-600 mb-8">Perbarui password akun Anda</p>
    </header>

    <!-- Quick Stats -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div class="card bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <form action="<?= base_url('/admin/ubah-password/change') ?>" method="POST" class="space-y-6">
                <?= csrf_field() ?> <!-- CSRF protection -->
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password Lama</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                </div>
                
                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">Password Baru</label>
                    <div class="relative">
                        <input type="password" id="new_password" name="new_password" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        <button type="button" onclick="togglePassword('new_password')"
                            class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 hover:text-gray-700">
                            <i class="fas fa-eye" id="new_password_icon"></i>
                        </button>
                    </div>
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password Baru</label>
                    <div class="relative">
                        <input type="password" id="confirm_password" name="confirm_password" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20">
                        <button type="button" onclick="togglePassword('confirm_password')"
                            class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500 hover:text-gray-700">
                            <i class="fas fa-eye" id="confirm_password_icon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition-all">
                    Simpan
                </button>
            </form>
        </div>
    </section>
</main>

<?= $this->include('templates/footer') ?>

<script>
    function togglePassword(id) {
        const passwordField = document.getElementById(id);
        const passwordIcon = document.getElementById(id + '_icon');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }
</script>