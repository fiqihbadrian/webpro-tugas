<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiqih Badrian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-1">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center py-0" href="#"><img class="img-fluid rounded-5" width="90" src="<?= base_url('public/assets/images/logo.png'); ?>" alt="Logo"></a>
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
                            Portofolio
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#portofolio">Project</a></li>
                            <li><a class="dropdown-item" href="#sertifikat">Sertifikat</a></li>
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
                    <a href="<?= base_url('login/register') ?>" class="btn btn-primary rounded-pill px-4 shadow-sm">
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
    <div id="beranda" class="vh-100 d-flex align-items-center pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="app-alert alert alert-success mb-4" role="alert">
                            <i class="bi bi-check-circle-fill"></i>
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <section class="jumbotron">
                        <div class="p-5 mb-4 bg-body-tertiary rounded-5">
                            <div class="container-fluid py-5">
                                <div class="row align-items-center g-4">
                                    <div class="col-12 col-lg-8">
                                        <h1 class="display-5 fw-bold">Fiqih Badrian</h1>
                                        <p class="fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                                        <button class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm" type="button">Download CV</button>
                                    </div>
                                    <div class="col-12 col-lg-4 text-lg-end">
                                        <img src="<?= base_url('/public/assets/images/logo.png') ?>" alt="foto" class="img-fluid rounded-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div id="tentang" class="container vh-100 align-items-center d-flex">
        <div class="row">
            <div class="col">
                <section class="about">
                    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                        <div class="container-fluid py-5">
                            <h1 class="display-5 fw-bold">About Me</h1>
                            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Portofolio -->
    <div id="portofolio" class="container py-5">
        <div class="row justify-content-around">
            <div class="col-12 text-center mb-5">
                <h1>Portofolio Saya</h1>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="<?= base_url('public/assets/images/logo.png'); ?>" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body ">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="<?= base_url('public/assets/images/logo.png'); ?>" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="<?= base_url('public/assets/images/logo.png'); ?>" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- From -->
    <div id="kontak" class="vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <form class="p-5 mb-3 bg-body-tertiary rounded-5">
                        <h1 class="display-5 fw-bold">Kontak Saya</h1>
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
    </div>


    <!-- FORM -->
    <!-- Awal Rencana -->
    <section id="rencana">
        <div class="container-fluid py-5">
            <form action="<?= base_url('home/index#rencana') ?>" method="post">
                <div class="row justify-content-center">
                    <h2>Rencanakan Perjalanan</h2>
                    <div class="col-md-4 mt-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Budget</label>
                            <input type="text" class="form-control" id="budget"
                                name="budget"
                                placeholder="Berapa Bugdet Perjalanan anda ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Jumlah Hari</label>
                            <input type="number" class="form-control"
                                id="jumlah_hari" name="jumlah_hari"
                                placeholder="Berapa Lama Perjalanan anda ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Jumlah Orang</label>
                            <input type="number" class="form-control"
                                id="jumlah_orang" name="jumlah_orang"
                                placeholder="Berapa Orang Perjalanan anda ">
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
                        <div class="mb-3">
                            <button class="btn btn-primary btn-md" type="submit"
                                style="background-color: #071c53">Simpan
                                Rencana</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Rencana -->


    <!-- OUTPUT -->
    <section id="output">
        <div class="row justify-content-center mb-6">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header text-white" style="background-color:#071c53;">
                        <h5 class="mb-0">Output Rencana Perjalanan</h5>
                    </div>
                    <div class="card-body">
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
    </section>

    <!-- Riwayat Perjalanan -->
    <section id="riwayat">
        <div class="container">
            <div class="row">
                <h1>Riwayat Perjalanan</h1>
                <table>
                    <tr>
                        <th>Budget</th>
                        <th>Jumlah Hari</th>
                        <th>Jumlah Orang</th>
                        <th>Jenis Wisata</th>
                    </tr>
                    <?php foreach ($wisata as $w) { ?>
                        <tr>
                            <td><?= $w->id; ?></td>
                            <td>Rp <?= number_format($w->budget); ?></td>
                            <td><?= $w->hari; ?> hari</td>
                            <td><?= $w->orang; ?> Orang</td>
                            <td><?= $w->jenis; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <div class="p-3 mb-2 bg-body-tertiary rounded-5 text-center">
        <p class="mb-0">Copyright &copy; 2026 Fiqih Badrian. All rights reserved.</p>
    </div>

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
        });
    </script>
</body>

</html>