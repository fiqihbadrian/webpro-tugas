<div class="dashboard-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
            <div>
                <h1>Data Destinasi</h1>
                <p>Kelola data destinasi wisata yang tersedia pada sistem Explore Bogor.</p>
            </div>
            <div class="d-flex gap-2">
                <a href="<?= base_url('destinasi/tambah') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Destinasi
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
            <h3>Data Destinasi</h3>
        </div>
        <div style="padding:20px;">
            <table id="TableDestinasi">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Destinasi</th>
                        <th>Kategori</th>
                        <th>Harga Tiket</th>
                        <th>Jam Operasional</th>
                        <th>Maps</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($destinasi as $d): ?>
                        <tr>
                            <td><strong><?= $no++; ?></strong></td>
                            <td>
                                <img src="<?= base_url('assets/upload/' . $d->foto) ?>" width="80" class="img-thumbnail">
                            </td>
                            <td><?= $d->nama_destinasi; ?></td>
                            <td>
                                <span class="badge bg-primary">
                                    <?= $d->nama_kategori; ?>
                                </span>
                            </td>
                            <td>Rp <?= number_format($d->harga_tiket, 0, ',', '.'); ?></td>
                            <td><?= $d->jam_operasional; ?></td>
                            <td>
                                <a href="<?= $d->link_maps; ?>" target="_blank" class="btn btn-sm btn-info">
                                    <i class="fas fa-map-marker-alt"></i>
                                </a>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?= base_url('destinasi/detail/' . $d->id_destinasi) ?>" class="action-icon-btn" title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?= base_url('destinasi/edit/' . $d->id_destinasi) ?>" class="action-icon-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('destinasi/hapus/' . $d->id_destinasi) ?>" class="action-icon-btn" title="Delete" onclick="return confirm('Yakin hapus destinasi ini?')">
                                        <i class="fas fa-trash"></i>
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
    new DataTable('#TableDestinasi');
});
</script>
