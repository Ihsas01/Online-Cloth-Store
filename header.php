<?php
    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | Different Wear' : 'Different Wear | Premium Fashion Store'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Premium fashion store with the latest trends and styles. Shop the best clothing collection online.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'fashion, clothing, online store, premium clothes, trendy fashion'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/Different_Wear.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | Different Wear' : 'Different Wear | Premium Fashion Store'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Premium fashion store with the latest trends and styles.'; ?>">
    <meta property="og:image" content="<?php echo isset($page_image) ? $page_image : 'images/Different_Wear.png'; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' | Different Wear' : 'Different Wear | Premium Fashion Store'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Premium fashion store with the latest trends and styles.'; ?>">
    <meta name="twitter:image" content="<?php echo isset($page_image) ? $page_image : 'images/Different_Wear.png'; ?>">
    
    <!-- Additional CSS for specific pages -->
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo $css; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-content">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/Different_Wear.png" alt="Different Wear Logo" width="150">
                        </a>
                    </div>
                    
                    <div class="nav-menu" id="nav-menu">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                    <i class="fas fa-home"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="products.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>">
                                    <i class="fas fa-tshirt"></i> Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                                    <i class="fas fa-envelope"></i> Contact
                                </a>
                            </li>
                            <?php if (isset($_SESSION['email'])): ?>
                                <li class="nav-item">
                                    <a href="account.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'account.php' ? 'active' : ''; ?>">
                                        <i class="fas fa-user"></i> Account
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.php" class="nav-link cart-icon <?php echo basename($_SERVER['PHP_SELF']) == 'cart.php' ? 'active' : ''; ?>">
                                        <i class="fas fa-shopping-cart"></i> Cart
                                        <span class="cart-count">0</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link btn-login">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link btn-login <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                                        <i class="fas fa-sign-in-alt"></i> Login
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    
                    <div class="nav-toggle" id="nav-toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content Starts Here -->
    <main class="main-content"> 