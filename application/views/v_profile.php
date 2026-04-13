<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
    <title>Profile</title>
</head>
<body>

<nav class="navbar">
    <div class="container navbar__inner">
        <div class="logo">Bian</div>
        <ul>
            <li><a href="<?= base_url('index.php') ?>">Beranda</a></li>
            <li><a href="<?= base_url('index.php/profile') ?>">Tentang</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </div>
</nav>

<header class="hero">
    <div class="container hero__inner">
        <div class="left">
            <div class="badge">Developer</div>
            <h1>Halo Aku<br>Fiqih Badrian</h1>
            <button class="btn">Tentang Saya</button>
        </div>

        <div class="right">
            <img src="<?= base_url('public/assets/images/profile.jpg') ?>" alt="Profile Image">
        </div>
    </div>
</header>

</body>
</html>