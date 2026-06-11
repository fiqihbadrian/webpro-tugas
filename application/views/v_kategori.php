<div class="dashboard-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex flex-column flex-md-row justify-content-between align-
items-start align-items-md-center mb-4 gap-3">
            <div>
                <h1>Data Kategori</h1>
                <p>Selamat datang kembali! Berikut ringkasan data kategori yang
                    tersedia di sistem.</p>
            </div>
            <div class="d-flex gap-2">
                <a href="<?= base_url('kategori/tambah_kategori') ?>" class="btn
btn-primary">
                    <i class="fas fa-plus"></i> Tambah Kategori
                </a>
            </div>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="table-card">
        <div class="table-header">
            <h3>Data Kategori</h3>
        </div>
        <div style="padding:20px;">
            <table id="TableKategori">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($kategori as $k): ?>
                        <tr>
                            <td><strong><?= $no++; ?></strong></td>
                            <td><?= $k->nama_kategori; ?></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?=
                                                base_url('kategori/edit_kategori/' . $k->id_kategori) ?>"
                                        class="action-icon-btn"
                                        title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="<?=
                                                base_url('kategori/hapus_kategori/' . $k->id_kategori) ?>"
                                        class="action-icon-btn"
                                        title="Delete"
                                        onclick="return confirm('Yakin hapus kategori ini?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new DataTable('#TableKategori');
    });
</script>