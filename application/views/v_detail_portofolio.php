<?php
$assetImagePath = base_url('public/assets/assets/images/');
$fallbackImage = $assetImagePath . 'icon-logo.png';
$detailImage = !empty($destinasi->foto) && file_exists('./public/assets/upload/' . $destinasi->foto)
    ? base_url('public/assets/upload/' . $destinasi->foto)
    : $fallbackImage;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($destinasi->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="bg-light text-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-1">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center py-0" href="<?= base_url(); ?>">
                <img class="img-fluid object-fit-contain" width="74" height="74" src="<?= $fallbackImage; ?>" alt="Logo">
            </a>
            <div class="ms-auto">
                <a href="<?= base_url(); ?>" class="btn btn-outline-dark rounded-pill px-4">
                    <i class="bi bi-arrow-left me-1"></i> Kembali ke Home
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-5 mt-5 pb-5">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row g-4 align-items-stretch justify-content-start text-start">
                <div class="col-12 col-lg-5">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="ratio ratio-4x3">
                            <img src="<?= $detailImage; ?>" class="w-100 h-100 object-fit-cover" alt="<?= htmlspecialchars($destinasi->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 p-lg-5 text-start">
                        <span class="badge rounded-pill text-bg-success-subtle text-success-emphasis border border-success-subtle align-self-start mb-3 px-3 py-2 fs-6">
                            <i class="bi bi-map"></i>
                            <?= htmlspecialchars($destinasi->nama_kategori ?? 'Wisata', ENT_QUOTES, 'UTF-8'); ?>
                        </span>
                        <h1 class="display-6 fw-bold mb-3"><?= htmlspecialchars($destinasi->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?></h1>
                        <p class="text-secondary mb-4"><?= nl2br(htmlspecialchars($destinasi->deskripsi, ENT_QUOTES, 'UTF-8')); ?></p>

                        <div class="list-group list-group-flush mb-4 w-100">
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-start bg-transparent">
                                <span class="fw-semibold text-dark">Alamat</span>
                                <span class="text-end text-secondary ms-3"><?= htmlspecialchars($destinasi->alamat, ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-start bg-transparent">
                                <span class="fw-semibold text-dark">Jam Operasional</span>
                                <span class="text-end text-secondary ms-3"><?= htmlspecialchars($destinasi->jam_operasional, ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                            <div class="list-group-item px-0 d-flex justify-content-between align-items-start bg-transparent">
                                <span class="fw-semibold text-dark">Harga Tiket</span>
                                <span class="text-end text-secondary ms-3">Rp <?= number_format($destinasi->harga_tiket, 0, ',', '.'); ?></span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <?php if (!empty($destinasi->link_maps)) : ?>
                                <a href="<?= $destinasi->link_maps; ?>" target="_blank" class="btn btn-success rounded-pill px-4">
                                    <i class="bi bi-geo-alt me-1"></i> Buka Maps
                                </a>
                            <?php endif; ?>
                            <a href="<?= base_url(); ?>" class="btn btn-outline-dark rounded-pill px-4">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>