<?php
    session_start();
    require 'db_connection.php';

    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }

    // Get user data for display
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $result = $mysqli->query($sql);
    $userData = $result->fetch_assoc();

    // Page-specific variables
    $page_title = "My Account";
    $page_description = "Manage your Different Wear account, view orders, update profile, and access exclusive member features.";
    $page_keywords = "account, profile, orders, dashboard, different wear, user account";
    
    // Include header
    include 'header.php';
?>

    <!-- Account Dashboard Hero Section -->
    <section class="account-hero-section">
        <div class="account-background">
            <div class="account-particles"></div>
            <div class="account-shapes">
                <div class="account-shape account-shape-1"></div>
                <div class="account-shape account-shape-2"></div>
                <div class="account-shape account-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="account-hero-content" data-aos="fade-up">
                <div class="account-badge">
                    <i class="fas fa-user-circle"></i>
                    <span>Welcome Back</span>
                </div>
                <h1 class="account-hero-title">
                    My <span class="highlight">Account</span> Dashboard
                </h1>
                <p class="account-hero-subtitle">
                    Manage your profile, track orders, and access exclusive member benefits
                </p>
            </div>
        </div>
    </section>

    <!-- Account Dashboard Section -->
    <section class="account-dashboard-section">
        <div class="container">
            <div class="dashboard-layout">
                <!-- Sidebar Navigation -->
                <div class="dashboard-sidebar" data-aos="fade-right">
                    <div class="sidebar-header">
                        <div class="user-profile">
                            <div class="profile-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="profile-info">
                                <h3 class="user-name"><?php echo isset($userData['fullname']) ? $userData['fullname'] : 'User'; ?></h3>
                                <span class="user-email"><?php echo $_SESSION['email']; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <nav class="sidebar-nav">
                        <ul class="nav-list">
                            <li class="nav-item active" data-tab="overview">
                                <a href="#overview" class="nav-link">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item" data-tab="profile">
                                <a href="#profile" class="nav-link">
                                    <i class="fas fa-user-edit"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" data-tab="orders">
                                <a href="#orders" class="nav-link">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span>Orders</span>
                                    <span class="badge">3</span>
                                </a>
                            </li>
                            <li class="nav-item" data-tab="wishlist">
                                <a href="#wishlist" class="nav-link">
                                    <i class="fas fa-heart"></i>
                                    <span>Wishlist</span>
                                    <span class="badge">12</span>
                                </a>
                            </li>
                            <li class="nav-item" data-tab="addresses">
                                <a href="#addresses" class="nav-link">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Addresses</span>
                                </a>
                            </li>
                            <li class="nav-item" data-tab="settings">
                                <a href="#settings" class="nav-link">
                                    <i class="fas fa-cog"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link logout-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Main Content Area -->
                <div class="dashboard-main" data-aos="fade-left">
                    <!-- Overview Tab -->
                    <div class="dashboard-tab active" id="overview-tab">
                        <div class="tab-header">
                            <h2>Account Overview</h2>
                            <p>Welcome back! Here's a summary of your account activity</p>
                        </div>

                        <!-- Stats Cards -->
                        <div class="stats-grid">
                            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="stat-icon">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>Total Orders</h3>
                                    <p class="stat-number">15</p>
                                    <span class="stat-change positive">+2 this month</span>
                                </div>
                            </div>

                            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="stat-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>Wishlist Items</h3>
                                    <p class="stat-number">12</p>
                                    <span class="stat-change">Updated today</span>
                                </div>
                            </div>

                            <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="stat-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>Loyalty Points</h3>
                                    <p class="stat-number">1,250</p>
                                    <span class="stat-change positive">+150 this week</span>
                                </div>
                            </div>

                            <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                                <div class="stat-icon">
                                    <i class="fas fa-percent"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>Member Level</h3>
                                    <p class="stat-number">Gold</p>
                                    <span class="stat-change">Premium benefits</span>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity -->
                        <div class="activity-section">
                            <div class="section-header">
                                <h3>Recent Activity</h3>
                                <a href="#" class="view-all">View All</a>
                            </div>
                            <div class="activity-list">
                                <div class="activity-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="activity-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="activity-content">
                                        <h4>Order #12345 Delivered</h4>
                                        <p>Your order has been successfully delivered</p>
                                        <span class="activity-time">2 hours ago</span>
                                    </div>
                                </div>

                                <div class="activity-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="activity-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="activity-content">
                                        <h4>Added to Wishlist</h4>
                                        <p>You added "Premium Denim Jacket" to your wishlist</p>
                                        <span class="activity-time">1 day ago</span>
                                    </div>
                                </div>

                                <div class="activity-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="activity-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="activity-content">
                                        <h4>Earned Loyalty Points</h4>
                                        <p>You earned 50 points for your recent purchase</p>
                                        <span class="activity-time">3 days ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Tab -->
                    <div class="dashboard-tab" id="profile-tab">
                        <div class="tab-header">
                            <h2>Profile Information</h2>
                            <p>Update your personal information and preferences</p>
                        </div>

                        <div class="profile-form-container">
                            <form class="profile-form" id="profileForm">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" value="<?php echo isset($userData['fullname']) ? $userData['fullname'] : ''; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                                        <small>Email cannot be changed</small>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone" value="<?php echo isset($userData['number']) ? $userData['number'] : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="birthdate">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea name="bio" rows="3" placeholder="Tell us about yourself..."></textarea>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <span>Update Profile</span>
                                        <i class="fas fa-save"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <span>Cancel</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Orders Tab -->
                    <div class="dashboard-tab" id="orders-tab">
                        <div class="tab-header">
                            <h2>My Orders</h2>
                            <p>Track your orders and view order history</p>
                        </div>

                        <div class="orders-container">
                            <div class="order-filters">
                                <button class="filter-btn active" data-filter="all">All Orders</button>
                                <button class="filter-btn" data-filter="pending">Pending</button>
                                <button class="filter-btn" data-filter="shipped">Shipped</button>
                                <button class="filter-btn" data-filter="delivered">Delivered</button>
                            </div>

                            <div class="orders-list">
                                <div class="order-card" data-aos="fade-up" data-aos-delay="100">
                                    <div class="order-header">
                                        <div class="order-info">
                                            <h4>Order #12345</h4>
                                            <span class="order-date">March 15, 2024</span>
                                        </div>
                                        <div class="order-status delivered">
                                            <i class="fas fa-check-circle"></i>
                                            <span>Delivered</span>
                                        </div>
                                    </div>
                                    <div class="order-items">
                                        <div class="order-item">
                                            <img src="images/products/7_1p.png" alt="Product">
                                            <div class="item-details">
                                                <h5>Premium Denim Jacket</h5>
                                                <span>Size: M | Color: Blue</span>
                                                <span class="item-price">LKR 89.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <div class="order-total">
                                            <span>Total: LKR 89.99</span>
                                        </div>
                                        <div class="order-actions">
                                            <button class="btn btn-outline">Track Order</button>
                                            <button class="btn btn-outline">Reorder</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-card" data-aos="fade-up" data-aos-delay="200">
                                    <div class="order-header">
                                        <div class="order-info">
                                            <h4>Order #12344</h4>
                                            <span class="order-date">March 10, 2024</span>
                                        </div>
                                        <div class="order-status shipped">
                                            <i class="fas fa-shipping-fast"></i>
                                            <span>Shipped</span>
                                        </div>
                                    </div>
                                    <div class="order-items">
                                        <div class="order-item">
                                            <img src="images/products/8_2p.png" alt="Product">
                                            <div class="item-details">
                                                <h5>Casual T-Shirt</h5>
                                                <span>Size: L | Color: White</span>
                                                <span class="item-price">LKR 29.99</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-footer">
                                        <div class="order-total">
                                            <span>Total: LKR 29.99</span>
                                        </div>
                                        <div class="order-actions">
                                            <button class="btn btn-outline">Track Order</button>
                                            <button class="btn btn-outline">Reorder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist Tab -->
                    <div class="dashboard-tab" id="wishlist-tab">
                        <div class="tab-header">
                            <h2>My Wishlist</h2>
                            <p>Save items for later and get notified when they're back in stock</p>
                        </div>

                        <div class="wishlist-container">
                            <div class="wishlist-grid">
                                <div class="wishlist-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="item-image">
                                        <img src="images/products/9_3p.png" alt="Product">
                                        <button class="remove-wishlist">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="item-content">
                                        <h4>Premium Hoodie</h4>
                                        <p class="item-price">LKR 79.99</p>
                                        <div class="item-actions">
                                            <button class="btn btn-primary">Add to Cart</button>
                                            <button class="btn btn-outline">View Details</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="wishlist-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="item-image">
                                        <img src="images/products/10_10p.png" alt="Product">
                                        <button class="remove-wishlist">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="item-content">
                                        <h4>Designer Jeans</h4>
                                        <p class="item-price">LKR 129.99</p>
                                        <div class="item-actions">
                                            <button class="btn btn-primary">Add to Cart</button>
                                            <button class="btn btn-outline">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Addresses Tab -->
                    <div class="dashboard-tab" id="addresses-tab">
                        <div class="tab-header">
                            <h2>My Addresses</h2>
                            <p>Manage your shipping and billing addresses</p>
                        </div>

                        <div class="addresses-container">
                            <div class="address-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="address-header">
                                    <h4>Default Shipping Address</h4>
                                    <div class="address-actions">
                                        <button class="btn btn-outline">Edit</button>
                                        <button class="btn btn-outline">Delete</button>
                                    </div>
                                </div>
                                <div class="address-content">
                                    <p><strong>John Doe</strong></p>
                                    <p>123 Main Street</p>
                                    <p>Apt 4B</p>
                                    <p>New York, NY 10001</p>
                                    <p>United States</p>
                                    <p>Phone: (555) 123-4567</p>
                                </div>
                            </div>

                            <button class="btn btn-primary add-address-btn">
                                <i class="fas fa-plus"></i>
                                <span>Add New Address</span>
                            </button>
                        </div>
                    </div>

                    <!-- Settings Tab -->
                    <div class="dashboard-tab" id="settings-tab">
                        <div class="tab-header">
                            <h2>Account Settings</h2>
                            <p>Manage your account preferences and security settings</p>
                        </div>

                        <div class="settings-container">
                            <div class="settings-section">
                                <h3>Security Settings</h3>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>Change Password</h4>
                                        <p>Update your account password for better security</p>
                                    </div>
                                    <button class="btn btn-outline">Change</button>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>Two-Factor Authentication</h4>
                                        <p>Add an extra layer of security to your account</p>
                                    </div>
                                    <button class="btn btn-outline">Enable</button>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h3>Notification Preferences</h3>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>Email Notifications</h4>
                                        <p>Receive updates about orders and promotions</p>
                                    </div>
                                    <label class="toggle-switch">
                                        <input type="checkbox" checked>
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>SMS Notifications</h4>
                                        <p>Get order updates via text message</p>
                                    </div>
                                    <label class="toggle-switch">
                                        <input type="checkbox">
                                        <span class="toggle-slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    // Page-specific inline scripts
    $inline_scripts = "
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Tab Switching - Only target sidebar navigation
        const sidebarNavItems = document.querySelectorAll('.dashboard-sidebar .nav-item');
        const dashboardTabs = document.querySelectorAll('.dashboard-tab');

        sidebarNavItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Skip logout link
                if (this.querySelector('.logout-link')) {
                    return;
                }
                
                const targetTab = this.getAttribute('data-tab');
                
                // Update active nav item
                sidebarNavItems.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
                
                // Update active tab
                dashboardTabs.forEach(tab => {
                    tab.classList.remove('active');
                    if (tab.id === targetTab + '-tab') {
                        tab.classList.add('active');
                    }
                });
            });
        });

        // Profile Form Handler
        const profileForm = document.getElementById('profileForm');
        if (profileForm) {
            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const submitBtn = this.querySelector('button[type=\"submit\"]');
                const originalText = submitBtn.innerHTML;
                
                // Show loading state
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Updating...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    showNotification('Profile updated successfully!', 'success');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            });
        }

        // Order Filters
        const filterBtns = document.querySelectorAll('.filter-btn');
        const orderCards = document.querySelectorAll('.order-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active filter
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filter orders
                orderCards.forEach(card => {
                    const status = card.querySelector('.order-status').classList.contains(filter);
                    if (filter === 'all' || status) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Wishlist Remove
        document.querySelectorAll('.remove-wishlist').forEach(btn => {
            btn.addEventListener('click', function() {
                const wishlistItem = this.closest('.wishlist-item');
                wishlistItem.style.opacity = '0';
                wishlistItem.style.transform = 'scale(0.8)';
                
                setTimeout(() => {
                    wishlistItem.remove();
                    showNotification('Item removed from wishlist', 'info');
                }, 300);
            });
        });

        // Toggle Switches
        document.querySelectorAll('.toggle-switch input').forEach(toggle => {
            toggle.addEventListener('change', function() {
                const settingName = this.closest('.setting-item').querySelector('h4').textContent;
                const status = this.checked ? 'enabled' : 'disabled';
                showNotification(settingName + ' ' + status, 'success');
            });
        });

        // Add Address Button
        document.querySelector('.add-address-btn').addEventListener('click', function() {
            showNotification('Add address feature coming soon!', 'info');
        });

        // Order Actions
        document.querySelectorAll('.order-actions button').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.textContent.trim();
                showNotification(action + ' feature coming soon!', 'info');
            });
        });

        // Wishlist Actions
        document.querySelectorAll('.wishlist-item .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.textContent.trim();
                showNotification(action + ' feature coming soon!', 'info');
            });
        });

        // Settings Actions
        document.querySelectorAll('.settings-section .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.textContent.trim();
                showNotification(action + ' feature coming soon!', 'info');
            });
        });

        // Initialize particles effect
        function createAccountParticles() {
            const particlesContainer = document.querySelector('.account-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 25; i++) {
                const particle = document.createElement('div');
                particle.className = 'account-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 12 + 's';
                particle.style.animationDuration = (Math.random() * 6 + 6) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createAccountParticles);

        // Notification System
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = 'notification notification-' + type;
            
            let iconClass = 'info-circle';
            if (type === 'success') {
                iconClass = 'check-circle';
            } else if (type === 'error') {
                iconClass = 'exclamation-circle';
            }
            
            notification.innerHTML = 
                '<i class=\"fas fa-' + iconClass + '\"></i>' +
                '<span>' + message + '</span>' +
                '<button class=\"notification-close\">' +
                    '<i class=\"fas fa-times\"></i>' +
                '</button>';
            
            document.body.appendChild(notification);
            
            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 5000);
            
            // Close button
            notification.querySelector('.notification-close').addEventListener('click', () => {
                notification.classList.remove('show');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            });
        }
    ";
    
    // Include footer
    include 'footer.php';
?>