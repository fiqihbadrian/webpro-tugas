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
                                    <img src="<?= base_url('/public/assets/images/formal.png') ?>" alt="foto" class="img-fluid rounded-5">
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
                            <button class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm" type="button">Download CV</button>
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
                <h1>Portofoolio Saya</h1>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="https://avatars.githubusercontent.com/u/76670473?s=400&u=643ccd226e649eb02d4a763a9aea70123e588c37&v=4" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body ">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="https://avatars.githubusercontent.com/u/76670473?s=400&u=643ccd226e649eb02d4a763a9aea70123e588c37&v=4" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 rounded-5 shadow overvlow-hidden">
                    <img src="https://avatars.githubusercontent.com/u/76670473?s=400&u=643ccd226e649eb02d4a763a9aea70123e588c37&v=4" class="card-img-top rounded-top-5" alt="hahaha">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary rounded-pill px-3 shadow-sm">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>