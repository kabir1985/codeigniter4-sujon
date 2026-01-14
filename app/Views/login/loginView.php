<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="card shadow-sm border-0" style="width: 100%; max-width: 420px;">
        <div class="card-body p-4">

            <h4 class="text-center mb-4 fw-bold">Login</h4>

            <?php  if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            📧
                        </span>
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            🔒
                        </span>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Enter password" required>
                        <span class="input-group-text bg-white" role="button" id="togglePassword">
                            👁️
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2">Login</button>

            </form>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('user_password');

    if (toggle && password) {
        toggle.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    }
});
</script>

<?= $this->endSection() ?>
