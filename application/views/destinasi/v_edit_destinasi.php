<div class="dashboard-content">
    <div class="page-header">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
            <div>
                <h1>Edit Destinasi</h1>
            </div>
            <div class="d-flex gap-2">
                <a href="<?= base_url('destinasi') ?>" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    <form action="<?= base_url('destinasi/update/'.$destinasi->id_destinasi) ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Informasi Destinasi
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Destinasi *</label>
                            <input type="text" name="nama_destinasi" class="form-control" value="<?= $destinasi->nama_destinasi ?>" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kategori *</label>
                                <select name="id_kategori" class="form-select" required>
                                    <?php foreach ($kategori as $k): ?>
                                        <option value="<?= $k->id_kategori ?>" <?= ($k->id_kategori == $destinasi->id_kategori) ? 'selected' : '' ?>>
                                            <?= $k->nama_kategori ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Harga Tiket *</label>
                                <input type="number" name="harga_tiket" class="form-control" value="<?= $destinasi->harga_tiket ?>" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jam Operasional *</label>
                            <input type="text" name="jam_operasional" class="form-control" value="<?= $destinasi->jam_operasional ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Google Maps</label>
                            <input type="text" name="link_maps" class="form-control" value="<?= $destinasi->link_maps ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat *</label>
                            <textarea name="alamat" class="form-control" rows="4" required><?= $destinasi->alamat ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi *</label>
                            <textarea name="deskripsi" class="form-control" rows="5" required><?= $destinasi->deskripsi ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>
                            <i class="fas fa-image"></i>
                            Foto Destinasi
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/upload/' . $destinasi->foto) ?>" class="img-fluid rounded mb-3" alt="<?= $destinasi->nama_destinasi ?>">
                        <input type="file" name="foto" class="form-control" accept="image/*">
                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                        </small>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-warning w-100 mb-2">
                            <i class="fas fa-save me-2"></i>
                            Update Destinasi
                        </button>
                        <a href="<?= base_url('destinasi') ?>" class="btn btn-outline-secondary w-100">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
