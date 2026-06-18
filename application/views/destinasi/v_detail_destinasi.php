<div class="dashboard-content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
            <div>
                <h1>Detail Destinasi</h1>
                <p>Informasi lengkap destinasi wisata.</p>
            </div>
            <div class="d-flex gap-2">
                <a href="<?= base_url('destinasi') ?>" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="<?= base_url('destinasi/edit/' . $destinasi->id_destinasi)
                            ?>" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Informasi Destinasi -->
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Informasi Destinasi
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table-custom" style="color:aliceblue; padding:20px;">
                        <tr>
                            <th width="220">Nama Destinasi</th>
                            <td><?= $destinasi->nama_destinasi ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>
                                <span class="badge bg-primary">
                                    <?= $destinasi->nama_kategori ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Harga Tiket</th>
                            <td>
                                Rp <?= number_format(
                                        $destinasi->harga_tiket,
                                        0,
                                        ',',
                                        '.'
                                    ) ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Jam Operasional</th>
                            <td><?= $destinasi->jam_operasional ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= $destinasi->alamat ?></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><?= nl2br($destinasi->deskripsi) ?></td>
                        </tr>
                        <tr>
                            <th>Google Maps</th>
                            <td>
                                <a href="<?= $destinasi->link_maps ?>"
                                    target="_blank"
                                    class="btn btn-primary btn-sm">
                                    <i class="bi bi-geo-alt"></i>
                                    Buka Maps
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- Foto -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <i class="fas fa-image"></i>
                        Foto Destinasi
                    </h5>
                </div>
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/upload/' . $destinasi->foto) ?>"
                        class="img-fluid rounded shadow-sm"
                        alt="<?= $destinasi->nama_destinasi ?>">
                </div>
            </div>
        </div>
    </div>
</div>