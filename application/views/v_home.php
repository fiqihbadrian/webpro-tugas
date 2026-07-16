<?php
$assetImagePath = base_url('public/assets/assets/images/');
$navbarLogo = $assetImagePath . 'small-logo.png';
$heroImage = $assetImagePath . 'hero.png';
$heroImage2 = $assetImagePath . 'hero2.png';
$heroImage3 = $assetImagePath . 'hero3.png';
$portfolioImage = $assetImagePath . 'icon-logo.png';
?>
<!doctype html>
<html lang="en">    

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiqih Badrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { padding-top: 88px; background: #f8fafc; color: #1f2937; }
        .section-block { padding: 4rem 0; }

        .hero-stack { position: relative; width: 340px; max-width: 100%; height: 260px; }
        .hero-stack img { position: absolute; width: 100%; max-width: 320px; border-radius: .75rem; object-fit: cover; box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.12); transition: transform .28s ease, opacity .6s ease; }
        .hero-img-1 { left: -12px; top: 36px; z-index: 2; transform: rotate(-4deg) scale(.95); }
        .hero-img-2 { left: 50%; top: -24px; transform: translateX(-50%) scale(1.1); z-index: 5; }
        .hero-img-3 { right: -12px; top: 36px; z-index: 1; transform: rotate(4deg) scale(.95); }
        .hero-stack:hover .hero-img-2 { transform: translateX(-50%) translateY(-8px) scale(1.12); }

        .fade-out { opacity: 0; }
        .fade-in { opacity: 1; }

        .hover-button { cursor: pointer; transition: transform .12s ease, box-shadow .12s ease; }

        .portfolio-image { height: 210px; object-fit: cover; }

        .app-alert { transition: opacity .35s ease, transform .35s ease; }
        .app-alert.fade-out { opacity: 0; transform: translateY(-8px); }

        .hover-button {
            background-color: #183889;
            transition: all 0.3s ease;
        }

        .hover-button:hover {
            background-color: #1c3fa3;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-1">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center py-0" href="#beranda"><img class="img-fluid" style="width:74px; height:74px; object-fit:contain;" src="<?= $navbarLogo; ?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wisata
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#destinasi">Alam</a></li>
                            <li><a class="dropdown-item" href="#destinasi">Budaya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>

                </ul>
                <div class="d-flex align-items-center gap-2 me-lg-3 mt-3 mt-lg-0">
                    <a href="<?= base_url('login') ?>" class="btn btn-outline-primary rounded-pill px-4">
                        Login
                    </a>
                    <a href="<?= base_url('login/register') ?>" class="btn btn-primary rounded-pill px-4 shadow-lg">
                        Register
                    </a>
                </div>
                <form class="d-flex mt-2 mt-lg-0" role="search">
                    <input class="form-control me-2 rounded-5" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success rounded-pill px-3" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav>

    <!-- Jumbotron -->
    <section id="beranda" class="section-block">
        <div class="container">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="app-alert alert alert-success mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="row align-items-center g-4 section-card bg-white p-4 p-lg-5 rounded-4 shadow-lg overflow-hidden">
                <div class="col-12 col-lg-7">
                    <div class="hero-copy">
                        <span class="badge text-bg-success rounded-pill mb-3 px-3 py-2">Wisata Indonesia</span>
                        <h1 class="display-5 fw-bold mb-3">Destinasi Wisata Indonesia</h1>
                        <p class="fs-5 text-secondary mb-4">Temukan keindahan alam dan budaya Indonesia melalui destinasi wisata yang kami pilihkan untuk Anda.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#portofolio" class="btn btn-primary btn-lg rounded-pill px-4 shadow-lg">Lihat Destinasi</a>
                            <a href="#kontak" class="btn btn-outline-dark btn-lg rounded-pill px-4">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 text-lg-end">
                    <div class="hero-stack ms-lg-auto" id="heroStack">
                        <img src="<?= $heroImage; ?>" class="hero-img-1" id="img1">
                        <img src="<?= $heroImage2; ?>" class="hero-img-2" id="img2">
                        <img src="<?= $heroImage3; ?>" class="hero-img-3" id="img3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="tentang" class="section-block">
        <div class="container">
            <div class="section-card bg-white p-4 p-lg-5 rounded-4 shadow-lg overflow-hidden">
                <div class="row justify-content-start">
                    <div class="col-12 col-lg-8">
                        <h2 class="display-6 fw-bold section-title">Tentang Kami</h2>
                        <p class="fs-5 text-secondary mb-0">Kami adalah tim profesional yang berdedikasi untuk memberikan pengalaman wisata terbaik di Indonesia. Dengan pengetahuan mendalam tentang berbagai destinasi, kami siap membantu Anda menemukan tempat wisata yang paling sesuai dengan kebutuhan dan minat Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portofolio -->
    <section id="destinasi" class="section-block pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <h2 class="display-6 fw-bold section-title">Destinasi Wisata</h2>
                </div>
                <?php if (!empty($latest_wisata)) : ?>
                    <?php foreach ($latest_wisata as $index => $wisataItem) : ?>
                        <?php
                        $portfolioTitle = !empty($wisataItem->nama_destinasi) ? $wisataItem->nama_destinasi : 'Destinasi #' . $wisataItem->id_destinasi;
                        $portfolioDescription = !empty($wisataItem->nama_kategori)
                            ? 'Kategori: ' . $wisataItem->nama_kategori . '. Jam operasional: ' . $wisataItem->jam_operasional . '.'
                            : 'Jam operasional: ' . $wisataItem->jam_operasional . '.';
                        $portfolioImageUrl = !empty($wisataItem->foto) && file_exists('./public/assets/upload/' . $wisataItem->foto)
                            ? base_url('public/assets/upload/' . $wisataItem->foto)
                            : $portfolioImage;
                        ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 rounded-4 soft-card overflow-hidden shadow-lg">
                                <div class="card-img-fixed">
                                    <a href="<?= base_url('home/detail_destinasi/' . $wisataItem->id_destinasi); ?>"
                                       class="d-block text-decoration-none"
                                       aria-label="Lihat detail <?= htmlspecialchars($wisataItem->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>">
                                        <img src="<?= $portfolioImageUrl; ?>" class="w-100 h-100 object-fit-cover" alt="<?= htmlspecialchars($wisataItem->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>">
                                    </a>
                                </div>
                                <div class="card-body text-start p-4">
                                    <h5 class="card-title fw-bold">
                                        <a href="<?= base_url('home/detail_destinasi/' . $wisataItem->id_destinasi); ?>" class="text-decoration-none text-dark"
                                           aria-label="Lihat detail <?= htmlspecialchars($wisataItem->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>">
                                            <?= htmlspecialchars($wisataItem->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>
                                        </a>
                                    </h5>
                                    <p class="card-text text-secondary mb-3"><?= htmlspecialchars($wisataItem->deskripsi, ENT_QUOTES, 'UTF-8'); ?></p>
                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                        <span class="badge text-bg-success rounded-pill"><?= htmlspecialchars($wisataItem->nama_kategori ?? 'Wisata', ENT_QUOTES, 'UTF-8'); ?></span>
                                        <span class="text-secondary small">Rp <?= number_format($wisataItem->harga_tiket, 0, ',', '.'); ?></span>
                                    </div>
                                    <a href="<?= base_url('home/detail_destinasi/' . $wisataItem->id_destinasi); ?>"
                                       class="btn btn-sm mt-3 rounded-pill hover-button text-white"
                                       style="background-color: #2f58c2;"
                                       aria-label="Lihat detail <?= htmlspecialchars($wisataItem->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?>">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-12">
                        <div class="alert alert-warning mb-0">Data destinasi belum tersedia di database.</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <!-- From -->
    <section id="kontak" class="section-block pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <form class="section-card bg-white p-4 p-lg-5 text-start rounded-4 shadow-lg overflow-hidden">
                        <h2 class="display-6 fw-bold section-title text-start">Kontak Saya</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- FORM -->
    <!-- Awal Rencana -->
    <section id="rencana" class="section-block pt-0">
        <div class="container">
            <form action="<?= base_url('home/index#rencana') ?>" method="post">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="section-card bg-white p-4 p-lg-5 text-start shadow-lg">
                            <h2 class="display-6 fw-bold section-title text-start">Rencanakan Perjalanan</h2>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Budget</label>
                                <input type="text" class="form-control" id="budget"
                                    name="budget"
                                    placeholder="Berapa Budget Perjalanan anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Hari</label>
                                <input type="number" class="form-control"
                                    id="jumlah_hari" name="jumlah_hari"
                                    placeholder="Berapa lama perjalanan anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Orang</label>
                                <input type="number" class="form-control"
                                    id="jumlah_orang" name="jumlah_orang"
                                    placeholder="Berapa orang perjalanan anda">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Jenis Wisata</label>
                                <select class="form-select" aria-label="Default select example" name="jenis_wisata"
                                    id="jenis_wisata">
                                    <option value="">Pilih Jenis Wisata</option>
                                    <option value="Alam">Alam</option>
                                    <option value="Keluarga">Keluarga</option>
                                    <option value="Edukasi">Edukasi</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <button class="btn btn-primary btn-md" type="submit"
                                    style="background-color: #071c53">Simpan
                                    Rencana</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Rencana -->


    <!-- OUTPUT -->
    <section id="output" class="section-block pt-0">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card section-card text-center rounded-4 shadow-lg">
                        <div class="card-header text-white text-center" style="background-color:#071c53;">
                            <h5 class="mb-0">Output Rencana Perjalanan</h5>
                        </div>
                        <div class="card-body text-center">
                        <?php if (
                            !empty($budget) && !empty($hari) &&
                            !empty($orang) && !empty($jenis)
                        ) { ?>
                            <p><b>Budget:</b> Rp <?= number_format($budget);
                                                    ?></p>
                            <p><b>Jumlah Hari:</b> <?= $hari; ?> hari</p>
                            <p><b>Jumlah Orang:</b> <?= $orang; ?> Orang</p>
                            <p><b>Jenis Wisata:</b> <?= $jenis; ?></p>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Riwayat Perjalanan -->
    <section id="riwayat" class="section-block pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-card bg-white p-4 p-lg-5 rounded-4 shadow-lg overflow-hidden">
                        <h2 class="display-6 fw-bold section-title">Riwayat Perjalanan</h2>
                        <div class="table-responsive">
                            <table class="table table-hover history-table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Budget</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jumlah Orang</th>
                                        <th>Jenis Wisata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($wisata as $w) { ?>
                                        <tr>
                                            <td><?= $w->id; ?></td>
                                            <td>Rp <?= number_format($w->budget); ?></td>
                                            <td><?= $w->hari; ?> hari</td>
                                            <td><?= $w->orang; ?> Orang</td>
                                            <td><?= $w->jenis; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <div class="container pb-4">
        <div class="p-3 bg-body-tertiary rounded-5 text-center">
            <p class="mb-0">Copyright &copy; 2026 Fiqih Badrian. All rights reserved.</p>
        </div>
    </div>
    <script>
    const images = [
        "<?= $heroImage; ?>",
        "<?= $heroImage2; ?>",
        "<?= $heroImage3; ?>"
    ];

    let index = 0;
    let intervalTime = 3000;
    let slider;

    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    const img3 = document.getElementById("img3");
    const stack = document.getElementById("heroStack");

    function updateImages() {
        img1.src = images[index % images.length];
        img2.src = images[(index + 1) % images.length];
        img3.src = images[(index + 2) % images.length];
    }

    function nextSlide() {
    img1.classList.add("fade-out");
    img2.classList.add("fade-out");
    img3.classList.add("fade-out");

    setTimeout(() => {
        index++;

        updateImages();

        img1.classList.remove("fade-out");
        img2.classList.remove("fade-out");
        img3.classList.remove("fade-out");

    }, 300);
}

    function startSlider(speed = intervalTime) {
        clearInterval(slider);
        slider = setInterval(nextSlide, speed);
    }

    startSlider();

    stack.addEventListener("click", () => {
    nextSlide();
    
    startSlider(intervalTime);
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.app-alert').forEach(function(alertElement) {
                setTimeout(function() {
                    alertElement.classList.add('fade-out');
                    setTimeout(function() {
                        alertElement.remove();
                    }, 350);
                }, 3000);
            });
            // Prevent browser form-resubmission prompt on reload (PRG client-side fallback)
            if (window.history && window.history.replaceState) {
                try {
                    // Replace current history entry so reload won't attempt to repost form data
                    window.history.replaceState(null, '', window.location.pathname + window.location.search);
                } catch (e) {
                    // ignore
                }
            }
        });
    </script>
</body>

</html>