<!-- Dashboard Content -->
<div class="dashboard-content">
    <!-- Page Header -->
    <div class="page-header">
        <h1>Dashboard Overview</h1>
        <p>Welcome back! Here's what's happening with your platform today.</p>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon primary">
                    <i class="bi bi-people"></i>
                </div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up"></i>
                </div>
            </div>
            <div class="stat-value"><?php echo isset($total_users) ? number_format($total_users) : 0; ?></div>
            <div class="stat-label">Total Users</div>
            <div class="stat-footer">
                <i class="bi bi-clock"></i>
                <span>From tb_user</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon success">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up"></i>
                </div>
            </div>
            <div class="stat-value"><?php echo isset($total_wisata) ? number_format($total_wisata) : 0; ?></div>
            <div class="stat-label">Data Wisata</div>
            <div class="stat-footer">
                <i class="bi bi-graph-up"></i>
                <span>From tb_destinasi</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon warning">
                    <i class="bi bi-journal-text"></i>
                </div>
                <div class="stat-trend up">
                    <i class="bi bi-arrow-up"></i>
                </div>
            </div>
            <div class="stat-value"><?php echo isset($total_rencana) ? number_format($total_rencana) : 0; ?></div>
            <div class="stat-label">Rencana Perjalanan</div>
            <div class="stat-footer">
                <i class="bi bi-geo-alt"></i>
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

    <!-- Destinasi Wisata Table -->
    <div class="table-card">
        <div class="table-header">
            <h3>Destinasi Wisata</h3>
            <div class="table-actions">
                <button class="filter-btn"><i class="bi bi-funnel"></i> Filter</button>
                <button class="filter-btn"><i class="bi bi-download"></i> Export</button>
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
                    <?php if (!empty($latest_wisata)) : ?>
                        <?php foreach ($latest_wisata as $wisata) : ?>
                            <tr>
                                <td><strong>#DST-<?php echo str_pad($wisata->id_destinasi, 3, '0', STR_PAD_LEFT); ?></strong></td>
                                <td><?php echo htmlspecialchars($wisata->nama_destinasi, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($wisata->jam_operasional ?? '-', ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>Rp <?php echo number_format($wisata->harga_tiket, 0, ',', '.'); ?></td>
                                <td><span class="badge bg-primary"><?php echo htmlspecialchars($wisata->nama_kategori ?? '-', ENT_QUOTES, 'UTF-8'); ?></span></td>
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

    <!-- Rencana Perjalanan Table -->
    <!-- ponytail: add $riwayat from tb_contoh in Dashboard controller when needed -->
    <div class="table-card mt-4">
        <div class="table-header">
            <h3>Rencana Perjalanan</h3>
        </div>
        <div class="table-responsive">
            <table class="custom-table">
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
                    <?php if (!empty($riwayat)) : ?>
                        <?php foreach ($riwayat as $r) : ?>
                            <tr>
                                <td><strong>#<?php echo $r->id; ?></strong></td>
                                <td>Rp <?php echo number_format($r->budget, 0, ',', '.'); ?></td>
                                <td><?php echo $r->hari; ?> hari</td>
                                <td><?php echo $r->orang; ?> Orang</td>
                                <td><?php echo htmlspecialchars($r->jenis, ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr><td colspan="5" class="text-center">Belum ada data rencana perjalanan.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
