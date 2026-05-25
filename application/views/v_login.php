<body>
    <div class="login-container">
        <div class="login-card mt-5">
            <div class="logo-section">
                <h2>Selamat Datang</h2>
                <p>Silahkan masuk untuk mengakses halaman admin</p>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="app-alert alert alert-success" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="app-alert alert alert-danger" role="alert">
                    <i class="bi bi-x-circle-fill"></i>
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('login/cek_login') ?>" method="post"
                id="loginForm">
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div style="position: relative;">
                        <i class="bi bi-person input-icon"></i>
                        <input type="text" class="form-control ps-5"
                            placeholder="Masukan Username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div style="position: relative;">
                        <i class="bi bi-lock input-icon"></i>
                        <input type="password" id="password" class="form-control ps-5 pe-5"
                            name="password" placeholder="Masukan Password" required>
                        <i class="bi bi-eye password-toggle"
                            id="togglePassword"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
            <div class="signup-link">
                Belum punya akun? <a href="<?= base_url('login/register') ?>">Buat
                    Akun</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            if (passwordInput && togglePassword) {
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.type === 'password';
                    passwordInput.type = isPassword ? 'text' : 'password';
                    togglePassword.classList.toggle('bi-eye');
                    togglePassword.classList.toggle('bi-eye-slash');
                });
            }

            document.querySelectorAll('.app-alert').forEach(function(alertElement) {
                setTimeout(function() {
                    alertElement.classList.add('fade-out');
                    setTimeout(function() {
                        alertElement.remove();
                    }, 350);
                }, 3000);
            });
        });
    </script>