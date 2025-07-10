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
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
        }
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: #fff;
            transition: width 0.3s;
        }
        .sidebar .nav-link {
            color: #adb5bd;
            transition: background 0.2s, color 0.2s;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #343a40;
            color: #fff;
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
        .card {
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border: none;
            border-radius: 1rem;
            transition: box-shadow 0.3s;
            margin-bottom: 2rem;
            animation: fadeInUp 0.7s;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .table-responsive {
            border-radius: 1rem;
            overflow: hidden;
        }
        .form-control, .form-select {
            border-radius: 0.5rem;
        }
        .btn-custom {
            background: linear-gradient(90deg, #4f8cff, #38b6ff);
            color: #fff;
            border: none;
            border-radius: 0.5rem;
            transition: background 0.2s;
        }
        .btn-custom:hover {
            background: linear-gradient(90deg, #38b6ff, #4f8cff);
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
    </style>
</head>
<body>
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
                <h4 class="fw-bold text-white">Admin Panel</h4>
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a href="dashboard.php" class="nav-link" data-section="dashboard"><i class="bi bi-speedometer2 me-2"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a href="#products" class="nav-link" data-section="products"><i class="bi bi-box-seam me-2"></i><span>Products</span></a></li>
                <li><a href="#customers" class="nav-link" data-section="customers"><i class="bi bi-people me-2"></i><span>Customers</span></a></li>
                <li><a href="#users" class="nav-link" data-section="users"><i class="bi bi-person-badge me-2"></i><span>Users</span></a></li>
                <li><a href="#contact" class="nav-link" data-section="contact"><i class="bi bi-envelope me-2"></i><span>Contact FAQ</span></a></li>
                <li><a href="#logout" class="nav-link text-danger" data-section="logout"><i class="bi bi-box-arrow-right me-2"></i><span>Logout</span></a></li>
            </ul>
        </nav>
        <main class="main-content flex-grow-1 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="mb-0">Welcome, Admin</h2>
                <a href="index.php" class="btn btn-primary"><i class="bi bi-globe me-1"></i>Go to Website</a>
            </div>
            <div id="products" class="card" style="display:none;">
                <div class="card-body">
                    <h3 class="card-title mb-4">Products</h3>
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
                    <h3 class="card-title mb-4">Customers</h3>
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
                    <h3 class="card-title mb-4">Users</h3>
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
                    <h3 class="card-title mb-4">Contact FAQ</h3>
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
    });
    // Show first section by default
    document.addEventListener('DOMContentLoaded', function() {
        showSection('products');
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
