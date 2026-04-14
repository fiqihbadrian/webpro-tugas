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
            <li><a href="<?= base_url('index.php/profile#tentang') ?>">Tentang</a></li>
            <li><a href="<?= base_url('index.php/profile#kontak') ?>">Kontak</a></li>
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

<!-- Tentang -->
<div id="tentang" class="section-content">
    <div class="container">
        <section>
            <div class="section-header">
                <h2>Tentang Saya</h2>
            </div>
            <div class="section-body">
                <p>Hi! I'm Fiqih Badrian, a passionate Front End Developer with a love for creating beautiful and functional web experiences. I specialize in building modern, responsive websites using the latest technologies.</p>
                <p>My journey in web development started with a curiosity about how websites work, and it has grown into a passion for crafting digital solutions that make a difference. I believe in writing clean, maintainable code and creating interfaces that users love.</p>
                <p>When I'm not coding, you can find me exploring new technologies, contributing to open source projects, or learning about the latest trends in web development and design.</p>
            </div>
        </section>
    </div>
</div>

<!-- Kontak -->
<div id="kontak" class="section-content">
    <div class="container">
        <section>
            <div class="section-header">
                <h2>Kontak</h2>
            </div>
            <div class="section-body">
                <p>Jika Anda memiliki pertanyaan atau peluang, jangan ragu untuk menghubungi saya.</p>
                <ul class="contact-list">
                    <li>Email: <a href="mailto:fiqihbadrian@gmail.com">fiqihbadrian@gmail.com</a></li>
                    <li>LinkedIn: <a href="https://www.linkedin.com/in/fiqih-badrian-27b73b286/" target="_blank" rel="noopener noreferrer">linkedin.com/in/fiqih-badrian-27b73b286</a></li>
                    <li>GitHub: <a href="https://github.com/fiqihbadrian" target="_blank" rel="noopener noreferrer">github.com/fiqihbadrian</a></li>
                </ul>
            </div>
        </section>
    </div>
</div>

</body>
</html>