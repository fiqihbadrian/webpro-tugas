<!-- Dashboard Content -->
<div class="dashboard-content">
    <!-- Page Header -->
    <div class="page-header">
        <h1>Orders Management</h1>
        <p>Welcome back! Here's what's happening with your food delivery platform today.</p>
    </div>

    <div class="row mb-4">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
            <div class="filter-card" data-status="all">
                <div class="filter-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <i class="fas fa-list"></i>
                </div>
                <div class="filter-info">
                    <h3 id="totalOrders">10</h3>
                    <p>Total Orders</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
            <div class="filter-card" data-status="pending">
                <div class="filter-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="filter-info">
                    <h3 id="pendingOrders">3</h3>
                    <p>Pending</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
            <div class="filter-card" data-status="in-progress">
                <div class="filter-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    <i class="fas fa-spinner"></i>
                </div>
                <div class="filter-info">
                    <h3 id="inProgressOrders">3</h3>
                    <p>In Progress</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 mb-3">
            <div class="filter-card" data-status="delivered">
                <div class="filter-icon" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="filter-info">
                    <h3 id="deliveredOrders">3</h3>
                    <p>Delivered</p>
                </div>
            </div>
        </div>
    </div>

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
                    <tr>
                        <td><strong>#ORD-2547</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">SJ</div>
                                <div class="customer-info">
                                    <h6>Sarah Johnson</h6>
                                    <p>+1 234 567 8900</p>
                                </div>
                            </div>
                        </td>
                        <td>Pizza Palace</td>
                        <td><strong>$45.80</strong></td>
                        <td>
                            <span class="status-badge delivering">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Delivering
                            </span>
                        </td>
                        <td>5 mins ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2546</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">MC</div>
                                <div class="customer-info">
                                    <h6>Michael Chen</h6>
                                    <p>+1 234 567 8901</p>
                                </div>
                            </div>
                        </td>
                        <td>Burger House</td>
                        <td><strong>$32.50</strong></td>
                        <td>
                            <span class="status-badge preparing">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Preparing
                            </span>
                        </td>
                        <td>12 mins ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2545</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">ED</div>
                                <div class="customer-info">
                                    <h6>Emily Davis</h6>
                                    <p>+1 234 567 8902</p>
                                </div>
                            </div>
                        </td>
                        <td>Sushi Master</td>
                        <td><strong>$67.20</strong></td>
                        <td>
                            <span class="status-badge delivered">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Delivered
                            </span>
                        </td>
                        <td>25 mins ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2544</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">JW</div>
                                <div class="customer-info">
                                    <h6>James Wilson</h6>
                                    <p>+1 234 567 8903</p>
                                </div>
                            </div>
                        </td>
                        <td>Taco Fiesta</td>
                        <td><strong>$28.90</strong></td>
                        <td>
                            <span class="status-badge confirmed">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Confirmed
                            </span>
                        </td>
                        <td>32 mins ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2543</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">LA</div>
                                <div class="customer-info">
                                    <h6>Lisa Anderson</h6>
                                    <p>+1 234 567 8904</p>
                                </div>
                            </div>
                        </td>
                        <td>Thai Kitchen</td>
                        <td><strong>$54.30</strong></td>
                        <td>
                            <span class="status-badge pending">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Pending
                            </span>
                        </td>
                        <td>45 mins ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2542</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">RB</div>
                                <div class="customer-info">
                                    <h6>Robert Brown</h6>
                                    <p>+1 234 567 8905</p>
                                </div>
                            </div>
                        </td>
                        <td>Pasta Bar</td>
                        <td><strong>$41.75</strong></td>
                        <td>
                            <span class="status-badge delivered">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Delivered
                            </span>
                        </td>
                        <td>1 hour ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><strong>#ORD-2541</strong></td>
                        <td>
                            <div class="order-customer">
                                <div class="customer-avatar">JM</div>
                                <div class="customer-info">
                                    <h6>Jessica Martinez</h6>
                                    <p>+1 234 567 8906</p>
                                </div>
                            </div>
                        </td>
                        <td>BBQ Grill</td>
                        <td><strong>$78.50</strong></td>
                        <td>
                            <span class="status-badge cancelled">
                                <i class="bi bi-circle-fill" style="font-size: 8px;"></i>
                                Cancelled
                            </span>
                        </td>
                        <td>1 hour ago</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-icon-btn" title="View Details">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-icon-btn" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-icon-btn" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

