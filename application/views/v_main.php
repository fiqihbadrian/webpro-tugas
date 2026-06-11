<!-- Main Content -->
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-actions ms-auto">
            <div class="dropdown profile-dropdown">
                <div class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="button">
                    <div class="user-profile">
                        <div class="user-avatar">AD</div>
                        <div class="user-info">
                            <h6><?php echo $this->session->userdata('nama_lengkap'); ?></h6>
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
            <p>Welcome back! Here's what's happening with your food delivery platform today.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon primary">
                        <i class="bi bi-receipt"></i>
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
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i> 8.5%
                    </div>
                </div>
                <div class="stat-value" id="totalRevenue"><?php echo isset($total_wisata) ? number_format($total_wisata) : number_format($this->session->userdata('total_wisata')); ?></div>
                <div class="stat-label">Data Wisata</div>
                <div class="stat-footer">
                    <i class="bi bi-graph-up"></i>
                    <span>Loaded from tb_contoh</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon warning">
                        <i class="bi bi-bicycle"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i> 3.2%
                    </div>
                </div>
                <div class="stat-value" id="activeRiders">87</div>
                <div class="stat-label">Active Riders</div>
                <div class="stat-footer">
                    <i class="bi bi-geo-alt"></i>
                    <span>Database active</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon info">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="stat-trend up">
                        <i class="bi bi-arrow-up"></i> 0.3
                    </div>
                </div>
                <div class="stat-value">4.8</div>
                <div class="stat-label">Average Rating</div>
                <div class="stat-footer">
                    <i class="bi bi-chat-left-dots"></i>
                    <span>Connected admin panel</span>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="chart-card">
                    <div class="chart-header">
                        <h3>Revenue Analytics</h3>
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
                        <h3>Order Status</h3>
                    </div>
                    <canvas id="orderStatusChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="table-card">
            <div class="table-header">
                <h3>Recent Orders</h3>
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
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Restaurant</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($latest_wisata) && is_array($latest_wisata) || is_object($latest_wisata)) : ?>
                            <?php foreach ($latest_wisata as $wisata) : ?>
                                <tr>
                                    <td><strong>#WST-<?php echo htmlspecialchars($wisata->id, ENT_QUOTES, 'UTF-8'); ?></strong></td>
                                    <td><?php echo htmlspecialchars($wisata->budget, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($wisata->hari, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($wisata->orang, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($wisata->jenis, ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>-</td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="#" class="action-icon-btn" title="View"><i class="bi bi-eye"></i></a>
                                            <a href="#" class="action-icon-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <a href="#" class="action-icon-btn" title="Delete"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr><td colspan="7" class="text-center">No data available</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>