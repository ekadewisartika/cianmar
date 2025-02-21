
<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('aside');
        sidebar.classList.toggle('-translate-x-full');
    }
    const $fileInput = document.querySelector('.file-input');
    const $dropArea = document.querySelector('.file-drop-area');
    const $fileMsg = document.querySelector('.file-msg');
    const $imagePreview = document.querySelector('#image-preview');
    const $previewImg = $imagePreview.querySelector('img');

    $fileInput.addEventListener('dragenter', () => {
        $dropArea.classList.add('is-active');
    });

    $fileInput.addEventListener('dragleave', () => {
        $dropArea.classList.remove('is-active');
    });

    $fileInput.addEventListener('drop', () => {
        $dropArea.classList.remove('is-active');
    });

    $fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            $fileMsg.textContent = fileName;

            // Preview image
            const reader = new FileReader();
            reader.onload = (e) => {
                $previewImg.src = e.target.result;
                $imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
<script src="<?= base_url('assets/js/sidebar-costume.js') ?>" defer></script>
<script src="<?= base_url('assets/js/notification.js') ?>" defer></script>
</body>
</html>