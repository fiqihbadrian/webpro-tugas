<div class="dashboard-content">
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Profile Settings</h1>
            <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('login/update_pass') ?>" method="post">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-user-cog me-2"></i>Pengaturan Profil
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">
                        Nama Lengkap
                    </label>
                    <input type="text"
                        name="nama_lengkap"
                        class="form-control"
                        value="<?= $user->nama_lengkap ?? '' ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Username
                    </label>
                    <input type="text"
                        name="username"
                        class="form-control"
                        value="<?= $user->username ?? '' ?>"
                        required>
                </div>
                <hr>
                <h6 class="mb-3">Ubah Password</h6>
                <div class="mb-3">
                    <label class="form-label">
                        Password Baru
                    </label>
                    <input type="password"
                        name="password"
                        class="form-control"
                        placeholder="Kosongkan jika tidak ingin mengubah password">
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Konfirmasi Password Baru
                    </label>
                    <input type="password"
                        name="konfirmasi_password"
                        class="form-control"
                        placeholder="Ulangi password baru">
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div><br>
        </div>
    </form>
</div>