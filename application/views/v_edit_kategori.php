<div class="dashboard-content">
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Edit Kategori</h1>
            <a href="<?= base_url('kategori') ?>" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
    <form action="<?= base_url('kategori/update_kategori/' . $kategori->id_kategori) ?>" method="post">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-tags me-2"></i>Data Kategori
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">
                        Nama Kategori
                    </label>
                    <input type="text"
                        name="nama_kategori"
                        class="form-control"
                        value="<?= $kategori->nama_kategori ?>"
                        required>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>