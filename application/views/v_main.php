<!-- Main Content -->
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-actions ms-auto">
            <div class="dropdown profile-dropdown">
                <div class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="button">
                    <div class="user-profile">
                        <div class="user-avatar">AD</div>
                        <div class="user-info">
                            <h6><?= $this->session->userdata('nama_lengkap') ?? 'Admin' ?></h6>
                            <p>Super Admin</p>
                        </div>
                    </div>
                </div>
                <ul class="dropdown-menu dropdown-menu-end mt-2">
                    <li>
                        <h6 class="dropdown-header">Settings</h6>
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('profile') ?>"><i class="fa-regular fa-user"></i> Profile Settings</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('notifications') ?>"><i class="fa-regular fa-bell"></i> Notifications</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('privacy') ?>"><i class="fa-solid fa-shield-halved"></i> Privacy &amp; Security</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('billing') ?>"><i class="fa-regular fa-credit-card"></i> Billing</a></li>
                    <li>
                        <div class="sign-out">
                            <a class="dropdown-item text-danger" href="<?= base_url('login/logout') ?>"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Dashboard Overview</h1>
            <p>Selamat datang! Kelola destinasi wisata dan rencana perjalanan Anda di sini.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon primary">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i> 12%
                    </div>
                </div>
                <div class="stat-value" id="totalOrders"><?php echo isset($total_users) ? number_format($total_users) : number_format($this->session->userdata('total_users')); ?></div>
                <div class="stat-label">Total Users</div>
                <div class="stat-footer">
                    <i class="bi bi-clock"></i>
                    <span>Loaded from tb_user</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon success">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i> 8.5%
                    </div>
                </div>
                <div class="stat-value" id="totalRevenue"><?php echo isset($total_wisata) ? number_format($total_wisata) : number_format($this->session->userdata('total_wisata')); ?></div>
                <div class="stat-label">Data Wisata</div>
                <div class="stat-footer">
                    <i class="bi bi-graph-up"></i>
                    <span>Loaded from tb_destinasi</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon warning">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i>
                    </div>
                </div>
                <div class="stat-value" id="rencanaCount"><?php echo isset($total_rencana) ? number_format($total_rencana) : 0; ?></div>
                <div class="stat-label">Rencana Perjalanan</div>
                <div class="stat-footer">
                    <i class="bi bi-journal-text"></i>
                    <span>From tb_contoh</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon info">
                        <i class="bi bi-tags"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i>
                    </div>
                </div>
                <div class="stat-value"><?php echo isset($total_kategori) ? number_format($total_kategori) : 0; ?></div>
                <div class="stat-label">Kategori Wisata</div>
                <div class="stat-footer">
                    <i class="bi bi-chat-left-dots"></i>
                    <span>From tb_kategori</span>
                </div>
            </div>
        </div>

        <?php
        // Prepare donut chart data from database
        $chart_labels = [];
        $chart_data = [];
        $chart_colors = ['#2ECC71', '#3498DB', '#9B59B6', '#F39C12', '#E74C3C', '#1ABC9C'];
        if (!empty($latest_wisata)) {
            $counts = [];
            foreach ($latest_wisata as $w) {
                $cat = $w->nama_kategori ?? 'Lainnya';
                $counts[$cat] = ($counts[$cat] ?? 0) + 1;
            }
            $chart_labels = array_keys($counts);
            $chart_data = array_values($counts);
        }
        ?>
        <script>
        const kategoriLabels = <?= json_encode($chart_labels) ?>;
        const kategoriData = <?= json_encode($chart_data) ?>;
        const kategoriColors = <?= json_encode(array_slice($chart_colors, 0, count($chart_labels))) ?>;
        </script>
        <!-- Charts Row -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Grafik Wisata</h3>
                        <div class="chart-filters">
                            <button class="filter-btn active">Day</button>
                            <button class="filter-btn">Week</button>
                            <button class="filter-btn">Month</button>
                            <button class="filter-btn">Year</button>
                        </div>
                    </div>
                    <canvas id="revenueChart" height="80"></canvas>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Kategori Wisata</h3>
                    </div>
                    <canvas id="orderStatusChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Destinasi Table -->
        <div class="table-card">
            <div class="table-header">
                <h3>Destinasi Wisata Terbaru</h3>
                <div class="table-actions">
                    <button class="filter-btn">
                        <i class="bi bi-funnel"></i> Filter
                    </button>
                    <button class="filter-btn">
                        <i class="bi bi-download"></i> Export
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Destinasi</th>
                            <th>Jam Operasional</th>
                            <th>Harga Tiket</th>
                            <th>Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($latest_wisata) && is_array($latest_wisata) || is_object($latest_wisata)) : ?>
                            <?php foreach ($latest_wisata as $wisata) : ?>
                                <tr>
                                    <td><strong>#DST-<?php echo str_pad($wisata->id_destinasi, 3, '0', STR_PAD_LEFT); ?></strong></td>
                                    <td><?php echo htmlspecialchars($wisata->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($wisata->jam_operasional, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>Rp <?php echo number_format($wisata->harga_tiket, 0, ',', '.'); ?></td>
                                    <td><span class="badge bg-primary"><?php echo htmlspecialchars($wisata->nama_kategori, ENT_QUOTES, 'UTF-8'); ?></span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="<?= base_url('destinasi/detail/' . $wisata->id_destinasi) ?>" class="action-icon-btn" title="View"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url('destinasi/edit/' . $wisata->id_destinasi) ?>" class="action-icon-btn" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('destinasi/hapus/' . $wisata->id_destinasi) ?>" class="action-icon-btn" title="Delete" onclick="return confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr><td colspan="6" class="text-center">No data available</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>