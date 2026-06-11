<!-- Sidebar -->
<?php
$requestUri = strtolower($_SERVER['REQUEST_URI'] ?? '');
$isDashboardActive = strpos($requestUri, 'dashboard') !== false;
$isKategoriActive = strpos($requestUri, 'kategori') !== false;
?>
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="logo" href="index.html">
                <i class="bi bi-basket2-fill"></i>
                <span class="logo-text">Wisata</span>
            </a>
            <button class="menu-toggle" id="menuToggle">
                <i class="bi bi-list"></i>
            </button>
        </div>
        
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link<?= $isDashboardActive ? ' active' : '' ?>">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('kategori') ?>" class="nav-link<?= $isKategoriActive ? ' active' : '' ?>">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content Wrapper -->
    <main class="main-content">