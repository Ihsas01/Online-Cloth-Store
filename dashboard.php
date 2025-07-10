<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: adminLogin.php');
    }

    require 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e3f0ff 100%);
            font-family: 'Inter', Arial, sans-serif;
        }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
            color: #fff;
            transition: width 0.3s, left 0.3s;
            box-shadow: 2px 0 12px rgba(0,0,0,0.07);
            position: relative;
        }
        .sidebar .sidebar-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .sidebar .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #38b6ff;
            background: #fff;
        }
        .sidebar .nav-link {
            color: #adb5bd;
            transition: background 0.2s, color 0.2s, padding-left 0.2s;
            border-radius: 0.5rem;
            margin-bottom: 0.25rem;
            padding: 0.75rem 1rem;
            position: relative;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: linear-gradient(90deg, #38b6ff 0%, #4f8cff 100%);
            color: #fff;
            padding-left: 1.5rem;
            box-shadow: 0 2px 8px rgba(56,182,255,0.08);
        }
        .sidebar .nav-link .bi {
            font-size: 1.2rem;
        }
        .sidebar-collapsed {
            width: 60px !important;
        }
        .sidebar-collapsed .nav-link span {
            display: none;
        }
        .sidebar-collapsed .sidebar-header {
            display: none;
        }
        .sidebar-collapsed .nav-link {
            text-align: center;
            padding-left: 0.5rem;
        }
        .main-content {
            transition: margin-left 0.3s;
        }
        .card {
            box-shadow: 0 2px 16px rgba(56,182,255,0.07);
            border: none;
            border-radius: 1.2rem;
            transition: box-shadow 0.3s, transform 0.2s;
            margin-bottom: 2rem;
            animation: fadeInUp 0.7s;
        }
        .card:hover {
            box-shadow: 0 6px 24px rgba(56,182,255,0.13);
            transform: translateY(-2px) scale(1.01);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .table-responsive {
            border-radius: 1rem;
            overflow: hidden;
        }
        .table {
            background: #fff;
        }
        .table thead {
            background: linear-gradient(90deg, #38b6ff 0%, #4f8cff 100%);
            color: #fff;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f3f8ff;
        }
        .form-control, .form-select {
            border-radius: 0.5rem;
            box-shadow: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #38b6ff;
            box-shadow: 0 0 0 2px rgba(56,182,255,0.15);
        }
        .btn-custom, .btn-primary {
            background: linear-gradient(90deg, #4f8cff, #38b6ff);
            color: #fff;
            border: none;
            border-radius: 0.5rem;
            transition: background 0.2s, box-shadow 0.2s;
            position: relative;
            overflow: hidden;
        }
        .btn-custom:hover, .btn-primary:hover {
            background: linear-gradient(90deg, #38b6ff, #4f8cff);
            box-shadow: 0 4px 16px rgba(56,182,255,0.13);
        }
        .btn-danger {
            border-radius: 0.5rem;
        }
        .btn:active::after {
            content: '';
            position: absolute;
            left: 50%; top: 50%;
            width: 120%; height: 120%;
            background: rgba(56,182,255,0.15);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            animation: ripple 0.4s linear;
            z-index: 1;
        }
        @keyframes ripple {
            to { transform: translate(-50%, -50%) scale(1); opacity: 0; }
        }
        .sticky-header {
            position: sticky;
            top: 0;
            z-index: 1040;
            background: #fff;
            box-shadow: 0 2px 8px rgba(56,182,255,0.07);
            border-radius: 0 0 1rem 1rem;
            padding: 1rem 2rem;
        }
        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #38b6ff;
            background: #fff;
        }
        .dropdown-menu {
            border-radius: 0.7rem;
            box-shadow: 0 4px 16px rgba(56,182,255,0.13);
        }
        .section-title {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #38b6ff;
        }
        @media (max-width: 991.98px) {
            .sidebar {
                position: fixed;
                z-index: 1030;
                left: -220px;
                width: 220px;
                top: 0;
                transition: left 0.3s;
            }
            .sidebar.show {
                left: 0;
            }
            .main-content {
                margin-left: 0 !important;
            }
        }
        @media (min-width: 992px) {
            .main-content {
                margin-left: 220px;
            }
        }
        @media (max-width: 575.98px) {
            .main-content {
                padding: 1rem !important;
            }
            .sticky-header {
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body>
<?php if (isset($_GET['profile_status'])): ?>
    <?php if ($_GET['profile_status'] === 'success'): ?>
        <div class="alert alert-success text-center m-3">Profile updated successfully!</div>
    <?php elseif ($_GET['profile_status'] === 'fail'): ?>
        <div class="alert alert-danger text-center m-3">Failed to update profile. Please try again.</div>
    <?php elseif ($_GET['profile_status'] === 'exists'): ?>
        <div class="alert alert-warning text-center m-3">Username already exists. Please choose another.</div>
    <?php elseif ($_GET['profile_status'] === 'empty'): ?>
        <div class="alert alert-info text-center m-3">Please fill in all fields.</div>
    <?php endif; ?>
<?php endif; ?>
    <nav class="navbar navbar-dark bg-dark d-lg-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" id="sidebarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand ms-2">Admin Dashboard</span>
        </div>
    </nav>
    <div class="d-flex">
        <nav class="sidebar flex-shrink-0 p-3" id="sidebar" style="width:220px;">
            <div class="sidebar-header mb-4">
                <img src="images/logos1.png" alt="Admin Avatar" class="avatar">
                <h4 class="fw-bold text-white mb-0">Admin Panel</h4>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a href="dashboard.php" class="nav-link" data-section="dashboard" title="Dashboard"><i class="bi bi-speedometer2 me-2"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a href="#products" class="nav-link" data-section="products" title="Products"><i class="bi bi-box-seam me-2"></i><span>Products</span></a></li>
                <li><a href="#customers" class="nav-link" data-section="customers" title="Customers"><i class="bi bi-people me-2"></i><span>Customers</span></a></li>
                <li><a href="#users" class="nav-link" data-section="users" title="Users"><i class="bi bi-person-badge me-2"></i><span>Users</span></a></li>
                <li><a href="#contact" class="nav-link" data-section="contact" title="Contact FAQ"><i class="bi bi-envelope me-2"></i><span>Contact FAQ</span></a></li>
                <li><a href="#logout" class="nav-link text-danger" data-section="logout" title="Logout"><i class="bi bi-box-arrow-right me-2"></i><span>Logout</span></a></li>
            </ul>
        </nav>
        <main class="main-content flex-grow-1 p-4">
            <div class="sticky-header d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center gap-2">
                    <h2 class="mb-0 fw-bold">Welcome, Admin</h2>
                    <span class="badge bg-info text-dark ms-2">Online</span>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/logos1.png" alt="Admin Avatar" class="admin-avatar me-2">
                        <span class="d-none d-md-inline text-dark fw-semibold">Admin</span>
                        <i class="bi bi-caret-down-fill ms-1 text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#adminProfileModal">Profile</a></li>
                        <li><a class="dropdown-item" href="#" onclick="window.location.href='adminLogout.php'">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div id="dashboard" class="card" style="display:none;">
                <div class="card-body text-center">
                    <h3 class="card-title mb-3 section-title"><i class="bi bi-speedometer2"></i> Dashboard</h3>
                    <h2 class="fw-bold mb-2">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                    <p class="lead text-secondary">We're glad to see you back. Manage your store efficiently and keep track of your products, customers, and more from this dashboard.</p>
                    <div class="alert alert-info mt-4 mx-auto" style="max-width: 400px;">
                        <i class="bi bi-info-circle me-2"></i>
                        This is your admin dashboard. Use the sidebar to navigate between sections.
                    </div>
                </div>
            </div>
            <div id="products" class="card" style="display:none;">
                <div class="card-body">
                    <h3 class="card-title mb-4 section-title"><i class="bi bi-box-seam"></i> Products</h3>
                    <form action="adminProductHandler.php" method="post" enctype="multipart/form-data" class="row g-3 mb-4">
                        <div class="col-md-6">
                            <input type="text" name="p_name" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="col-md-6">
                            <select name="p_type" class="form-select" required>
                                <option value="">Select Product Type</option>
                                <option value="new-arrival">New Arrival</option>
                                <option value="latest-fashion">Latest Fashion</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="number" name="price" class="form-control" placeholder="Price" required>
                        </div>
                        <div class="col-md-6">
                            <input type="file" name="picture" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <textarea name="description" class="form-control" rows="3" placeholder="Description" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-custom">Add Product</button>
                        </div>
                    </form>
                    <h4 class="mb-3">Product Details</h4>
                    <div class="table-responsive">
                        <?php
                        $sql = "SELECT * FROM product";
                        $result = $mysqli->query($sql);
                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped table-hover align-middle'>";
                            echo "<thead class='table-dark'><tr><th>Product ID</th><th>Product Name</th><th>Product Type</th><th>Price</th><th>Description</th><th>Picture</th><th>Actions</th></tr></thead><tbody>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['p_id'] . "</td>";
                                echo "<td>" . $row['p_name'] . "</td>";
                                echo "<td>" . $row['p_type'] . "</td>";
                                echo "<td>$" . $row['price'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                echo "<td><img width='80' class='img-thumbnail' src='images/products/" . $row['picture']. "'></td>";
                                echo "<td>
                                        <button class='btn btn-primary btn-sm me-1' onclick='editProduct(" . $row['p_id'] . ", \"" . addslashes($row['p_name']) . "\", \"" . $row['p_type'] . "\", " . $row['price'] . ", \"" . addslashes($row['description']) . "\", \"" . $row['picture'] . "\")'>
                                            <i class='bi bi-pencil'></i> Edit
                                        </button>
                                        <form action='adminProductHandler.php' method='post' class='d-inline'>
                                            <input type='hidden' name='action' value='delete'>
                                            <input type='hidden' name='p_id' value='" . $row['p_id'] . "'>
                                            <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this product?\")'>
                                                <i class='bi bi-trash'></i> Delete
                                            </button>
                                        </form>
                                      </td>";
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "<div class='alert alert-info'>No products found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div id="customers" class="card" style="display:none;">
                <div class="card-body">
                    <h3 class="card-title mb-4 section-title"><i class="bi bi-people"></i> Customers</h3>
                    <div class="table-responsive">
                        <?php
                        $sql = "SELECT * FROM customer";
                        $result = $mysqli->query($sql);
                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped table-hover align-middle'>";
                            echo "<thead class='table-dark'><tr><th>Full Name</th><th>Email</th><th>Password</th><th>Phone</th><th>Action</th></tr></thead><tbody>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['fullname'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td><form action='adminCustomerHandler.php' method='post' class='d-inline'><input type='hidden' name='email' value='" . $row['email'] . "'><button type='submit' class='btn btn-danger btn-sm'><i class='bi bi-trash'></i> Delete</button></form></td>";
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "<div class='alert alert-info'>No customers found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div id="users" class="card" style="display:none;">
                <div class="card-body">
                    <h3 class="card-title mb-4 section-title"><i class="bi bi-person-badge"></i> Users</h3>
                    <?php if (isset($_GET['user_status'])): ?>
                        <?php if ($_GET['user_status'] === 'success'): ?>
                            <div class="alert alert-success">User added successfully!</div>
                        <?php elseif ($_GET['user_status'] === 'fail'): ?>
                            <div class="alert alert-danger">Failed to add user. Please try again.</div>
                        <?php elseif ($_GET['user_status'] === 'exists'): ?>
                            <div class="alert alert-warning">Username already exists. Please choose another.</div>
                        <?php elseif ($_GET['user_status'] === 'empty'): ?>
                            <div class="alert alert-info">Please fill in all fields.</div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <form action="adminUserHandler.php" method="post" class="row g-3 mb-4" style="max-width: 600px; margin: 0 auto;">
                        <div class="col-md-4">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="col-md-4">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-md-4">
                            <select name="user_group" class="form-select" required>
                                <option value="">Select Group</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-custom">Add User</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <?php
                        $sql = "SELECT * FROM user_logs";
                        $result = $mysqli->query($sql);
                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped table-hover align-middle'>";
                            echo "<thead class='table-dark'><tr><th>Username</th><th>Password</th><th>User Group</th></tr></thead><tbody>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "<td>" . $row['user_group'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "<div class='alert alert-info'>No users found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div id="contact" class="card" style="display:none;">
                <div class="card-body">
                    <h3 class="card-title mb-4 section-title"><i class="bi bi-envelope"></i> Contact FAQ</h3>
                    <div class="table-responsive">
                        <?php
                        $sql = "SELECT * FROM contact";
                        $result = $mysqli->query($sql);
                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped table-hover align-middle'>";
                            echo "<thead class='table-dark'><tr><th>Contact ID</th><th>Full Name</th><th>Email</th><th>Message</th><th>Action</th></tr></thead><tbody>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['contact_id'] . "</td>";
                                echo "<td>" . $row['fullname'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['message'] . "</td>";
                                echo "<td><form action='adminContactHandler.php' method='post' class='d-inline'><input type='hidden' name='contact_id' value='" . $row['contact_id'] . "'><button type='submit' class='btn btn-danger btn-sm'><i class='bi bi-trash'></i> Delete</button></form></td>";
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "<div class='alert alert-info'>No contact messages found.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Edit Product Modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="adminProductHandler.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="p_id" id="edit_p_id">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_p_name" class="form-label">Product Name</label>
                                <input type="text" name="p_name" id="edit_p_name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_p_type" class="form-label">Product Type</label>
                                <select name="p_type" id="edit_p_type" class="form-select" required>
                                    <option value="">Select Product Type</option>
                                    <option value="new-arrival">New Arrival</option>
                                    <option value="latest-fashion">Latest Fashion</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_price" class="form-label">Price</label>
                                <input type="number" name="price" id="edit_price" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_picture" class="form-label">New Picture (Optional)</label>
                                <input type="file" name="picture" id="edit_picture" class="form-control">
                                <small class="text-muted">Leave empty to keep current picture</small>
                            </div>
                            <div class="col-12">
                                <label for="edit_description" class="form-label">Description</label>
                                <textarea name="description" id="edit_description" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Current Picture</label>
                                <div>
                                    <img id="current_picture" src="" alt="Current Product Picture" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Admin Profile Modal -->
    <div class="modal fade" id="adminProfileModal" tabindex="-1" aria-labelledby="adminProfileModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="adminProfileHandler.php" method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="adminProfileModalLabel">Admin Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php
                $admin_username = $_SESSION['username'];
                $sql = "SELECT * FROM user_logs WHERE username = '$admin_username' LIMIT 1";
                $result = $mysqli->query($sql);
                $admin = $result && $result->num_rows > 0 ? $result->fetch_assoc() : null;
              ?>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($admin['username'] ?? ''); ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($admin['password'] ?? ''); ?>" required>
              </div>
              <div class="mb-3">
                <label class="form-label">User Group</label>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($admin['user_group'] ?? ''); ?>" readonly>
              </div>
              <input type="hidden" name="old_username" value="<?php echo htmlspecialchars($admin['username'] ?? ''); ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Sidebar toggle for mobile
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
    }
    // Sidebar collapse/expand for desktop
    let isCollapsed = false;
    sidebar.addEventListener('dblclick', function() {
        if (window.innerWidth >= 992) {
            sidebar.classList.toggle('sidebar-collapsed');
            isCollapsed = !isCollapsed;
            document.querySelector('.main-content').style.marginLeft = isCollapsed ? '60px' : '220px';
        }
    });
    // Section navigation and animation
    const navLinks = document.querySelectorAll('.sidebar .nav-link');
    const cards = document.querySelectorAll('.main-content .card');
    function showSection(sectionId) {
        cards.forEach(card => {
            card.style.display = 'none';
        });
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
        navLinks.forEach(link => link.classList.remove('active'));
        document.querySelector(`.sidebar .nav-link[data-section="${sectionId}"]`).classList.add('active');
    }
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const section = this.getAttribute('data-section');
            if (section === 'logout') {
                window.location.href = 'adminLogout.php';
            } else {
                showSection(section);
                // Collapse sidebar on mobile after click
                if (window.innerWidth < 992) {
                    sidebar.classList.remove('show');
                }
            }
        });
        // Tooltip for nav icons
        new bootstrap.Tooltip(link, {placement: 'right'});
    });
    // Show first section by default
    document.addEventListener('DOMContentLoaded', function() {
        showSection('products');
    });
    // Ripple effect for buttons
    document.querySelectorAll('.btn, .btn-custom, .btn-primary').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            ripple.className = 'ripple';
            ripple.style.left = `${e.offsetX}px`;
            ripple.style.top = `${e.offsetY}px`;
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 400);
        });
    });
    // Edit Product Function
    function editProduct(p_id, p_name, p_type, price, description, picture) {
        document.getElementById('edit_p_id').value = p_id;
        document.getElementById('edit_p_name').value = p_name;
        document.getElementById('edit_p_type').value = p_type;
        document.getElementById('edit_price').value = price;
        document.getElementById('edit_description').value = description;
        document.getElementById('current_picture').src = 'images/products/' + picture;
        // Show the modal
        const editModal = new bootstrap.Modal(document.getElementById('editProductModal'));
        editModal.show();
    }
    </script>
</body>
</html>
