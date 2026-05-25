<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo-section">
                <h2>Daftar Akun</h2>
            </div>
            <!-- Tambahan Alert -->
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="app-alert alert alert-success" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('login/simpan_register') ?>"
                method="post" id="signupForm">
                <div class="form-group">
                    <label class="form-label">Nama Lengkap</label>
                    <div style="position: relative;">
                        <i class="bi bi-person-vcard input-icon"></i>
                        <input type="text" class="form-control ps-5"
                            name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">username</label>
                    <div style="position: relative;">
                        <i class="bi bi-person input-icon"></i>
                        <input type="text" class="form-control ps-5" name="username"
                            placeholder="Masukan Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div style="position: relative;">
                        <i class="bi bi-lock input-icon"></i>
                        <input type="password" name="password" id="password"
                            class="form-control ps-5 pe-5" placeholder="Masukan Password" required>
                        <i class="bi bi-eye password-toggle"
                            id="togglePassword"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-signup mt-4">Daftar
                    Akun</button>
            </form>
            <div class="login-link">
                Sudah punya akun? <a href="<?= base_url('login') ?>">Login</a>
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