<?php
    // Page-specific variables
    $page_title = "Product Details";
    $page_description = "View detailed information about our premium fashion products. Get size guides, reviews, and add to cart.";
    $page_keywords = "product details, fashion, clothing, online store, premium clothes, different-wear product";
    
    // Include header
    include 'header.php';
    
    require 'db_connection.php';

    $status = $_GET['status'] ?? '';

    if ($status === 'success') {
        echo "<script>alert('Successfully registered. Please login to continue.');</script>";
    } elseif ($status === 'register-fail') {
        echo "<script>alert('Failed to register your account. Please try again.');</script>";
    } elseif ($status === 'login-fail') {
        echo "<script>alert('Username or Password is wrong. Please try again');</script>";
    } elseif ($status === 'exists') {
        echo "<script>alert('Email is already registered. Try different email or please login into your account.');</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product ? $product['p_name'] . ' | Different Wear' : 'Product Not Found'; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
                                <a href="index.php" class="nav-link">
                                    <i class="fas fa-home"></i> Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="products.php" class="nav-link">
                                    <i class="fas fa-tshirt"></i> Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">
                                    <i class="fas fa-envelope"></i> Contact
                                </a>
                            </li>
                            <?php if (isset($_SESSION['email'])): ?>
                                <li class="nav-item">
                                    <a href="account.php" class="nav-link">
                                        <i class="fas fa-user"></i> Account
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link btn-login">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link btn-login">
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

    <?php if ($product): ?>
    <!-- Product Details Section -->
    <section class="product-details" style="padding: 8rem 0 4rem; margin-top: 60px;">
        <div class="container">
            <div class="product-layout">
                <!-- Product Images -->
                <div class="product-images" data-aos="fade-right">
                    <div class="main-image">
                        <img src="images/products/<?php echo $product['picture']; ?>" alt="<?php echo $product['p_name']; ?>" id="main-image">
                    </div>
                    <div class="thumbnail-images">
                        <img src="images/products/<?php echo $product['picture']; ?>" alt="Thumbnail 1" class="thumbnail active" onclick="changeImage(this)">
                        <img src="images/product page/123/1p.png" alt="Thumbnail 2" class="thumbnail" onclick="changeImage(this)">
                        <img src="images/product page/123/2p.png" alt="Thumbnail 3" class="thumbnail" onclick="changeImage(this)">
                        <img src="images/product page/123/3p.png" alt="Thumbnail 4" class="thumbnail" onclick="changeImage(this)">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info" data-aos="fade-left">
                    <nav class="breadcrumb">
                        <a href="index.php">Home</a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="products.php">Products</a>
                        <i class="fas fa-chevron-right"></i>
                        <span><?php echo $product['p_name']; ?></span>
                    </nav>

                    <h1 class="product-title"><?php echo $product['p_name']; ?></h1>
                    
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text">4.5 (128 reviews)</span>
                        <a href="#reviews" class="review-link">Write a review</a>
                    </div>

                    <div class="product-price">
                        <span class="current-price">LKR <?php echo $product['price']; ?>.00</span>
                        <span class="original-price">LKR <?php echo $product['price'] + 20; ?>.00</span>
                        <span class="discount">Save LKR 20.00</span>
                    </div>

                    <div class="product-description">
                        <p><?php echo $product['description'] ?: 'Premium quality fashion item designed for comfort and style. Made with the finest materials to ensure durability and elegance.'; ?></p>
                    </div>

                    <div class="product-options">
                        <!-- Size Selection -->
                        <div class="option-group">
                            <label>Size:</label>
                            <div class="size-options">
                                <button class="size-btn" data-size="S">S</button>
                                <button class="size-btn active" data-size="M">M</button>
                                <button class="size-btn" data-size="L">L</button>
                                <button class="size-btn" data-size="XL">XL</button>
                                <button class="size-btn" data-size="XXL">XXL</button>
                            </div>
                        </div>

                        <!-- Color Selection -->
                        <div class="option-group">
                            <label>Color:</label>
                            <div class="color-options">
                                <button class="color-btn active" data-color="black" style="background-color: #000;"></button>
                                <button class="color-btn" data-color="white" style="background-color: #fff; border: 1px solid #ddd;"></button>
                                <button class="color-btn" data-color="blue" style="background-color: #3b82f6;"></button>
                                <button class="color-btn" data-color="red" style="background-color: #ef4444;"></button>
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="option-group">
                            <label>Quantity:</label>
                            <div class="quantity-selector">
                                <button class="qty-btn" onclick="changeQuantity(-1)">-</button>
                                <input type="number" value="1" min="1" max="10" id="quantity">
                                <button class="qty-btn" onclick="changeQuantity(1)">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-actions">
                        <form action="cartHandler.php" method="post" class="add-to-cart-form">
                            <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
                            <input type="hidden" name="size" id="selected-size" value="M">
                            <input type="hidden" name="color" id="selected-color" value="black">
                            <input type="hidden" name="quantity" id="selected-quantity" value="1">
                            
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-shopping-cart"></i>
                                Add to Cart
                            </button>
                        </form>
                        
                        <button class="btn btn-outline btn-large add-to-wishlist">
                            <i class="fas fa-heart"></i>
                            Add to Wishlist
                        </button>
                    </div>

                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-truck"></i>
                            <span>Free shipping on orders over $50</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-undo"></i>
                            <span>30-day return policy</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure payment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Tabs Section -->
    <section class="product-tabs" style="padding: 4rem 0; background: var(--bg-light);">
        <div class="container">
            <div class="tabs-container" data-aos="fade-up">
                <div class="tabs-header">
                    <button class="tab-btn active" data-tab="description">Description</button>
                    <button class="tab-btn" data-tab="specifications">Specifications</button>
                    <button class="tab-btn" data-tab="reviews">Reviews</button>
                    <button class="tab-btn" data-tab="shipping">Shipping & Returns</button>
                </div>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        <h3>Product Description</h3>
                        <p>This premium fashion item is crafted with the finest materials to ensure both comfort and style. The design incorporates modern trends while maintaining timeless elegance.</p>
                        <ul>
                            <li>Premium quality fabric</li>
                            <li>Comfortable fit</li>
                            <li>Easy to maintain</li>
                            <li>Versatile styling options</li>
                        </ul>
                    </div>
                    
                    <div class="tab-pane" id="specifications">
                        <h3>Product Specifications</h3>
                        <div class="specs-grid">
                            <div class="spec-item">
                                <span class="spec-label">Material:</span>
                                <span class="spec-value">100% Cotton</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Care:</span>
                                <span class="spec-value">Machine washable</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Fit:</span>
                                <span class="spec-value">Regular fit</span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Origin:</span>
                                <span class="spec-value">Made in USA</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="reviews">
                        <h3>Customer Reviews</h3>
                        <div class="reviews-summary">
                            <div class="rating-overview">
                                <div class="average-rating">4.5</div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>Based on 128 reviews</p>
                            </div>
                        </div>
                        
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <h4>John D.</h4>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <span class="review-date">2 days ago</span>
                            </div>
                            <p>Excellent quality and perfect fit! Highly recommend.</p>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="shipping">
                        <h3>Shipping & Returns</h3>
                        <div class="shipping-info">
                            <h4>Shipping Information</h4>
                            <ul>
                                <li>Free shipping on orders over $50</li>
                                <li>Standard delivery: 3-5 business days</li>
                                <li>Express delivery: 1-2 business days</li>
                                <li>International shipping available</li>
                            </ul>
                            
                            <h4>Return Policy</h4>
                            <ul>
                                <li>30-day return window</li>
                                <li>Free returns for US customers</li>
                                <li>Items must be unworn and in original packaging</li>
                                <li>Refund processed within 5-7 business days</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="related-products" style="padding: 4rem 0;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">You Might Also Like</h2>
                <p class="section-subtitle">Discover more products that match your style</p>
            </div>
            
            <div class="products-grid">
                <?php
                    $related_sql = "SELECT * FROM product WHERE p_id != $p_id LIMIT 4";
                    $related_result = $mysqli->query($related_sql);
                    if ($related_result->num_rows > 0) {
                        while ($related_product = $related_result->fetch_assoc()) {
                            echo '<div class="product-card" data-aos="fade-up">';
                            echo '<div class="product-image">';
                            echo '<img src="images/products/'.$related_product['picture'].'" alt="'.$related_product['p_name'].'">';
                            echo '<div class="product-overlay">';
                            echo '<div class="product-actions">';
                            echo '<a href="single-product.php?p_id='.$related_product['p_id'].'" class="action-btn"><i class="fas fa-eye"></i></a>';
                            echo '<button class="action-btn add-to-cart" data-id="'.$related_product['p_id'].'"><i class="fas fa-shopping-cart"></i></button>';
                            echo '<button class="action-btn add-to-wishlist"><i class="fas fa-heart"></i></button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="product-content">';
                            echo '<h3 class="product-title">'.$related_product['p_name'].'</h3>';
                            echo '<div class="product-price">LKR '.$related_product['price'].'.00</div>';
                            echo '<div class="product-rating">';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star-half-alt"></i>';
                            echo '<span>(4.5)</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <?php else: ?>
    <!-- Product Not Found -->
    <section class="product-not-found" style="padding: 8rem 0 4rem; margin-top: 60px; text-align: center;">
        <div class="container">
            <div data-aos="fade-up">
                <i class="fas fa-exclamation-triangle" style="font-size: 4rem; color: var(--secondary-color); margin-bottom: 2rem;"></i>
                <h1>Product Not Found</h1>
                <p>The product you're looking for doesn't exist or has been removed.</p>
                <a href="products.php" class="btn btn-primary">Browse All Products</a>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php
    // Page-specific inline scripts
    $inline_scripts = "
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Mobile Navigation Toggle
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });

        // Back to Top Button
        const backToTop = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Image Gallery
        function changeImage(thumbnail) {
            const mainImage = document.getElementById('main-image');
            mainImage.src = thumbnail.src;
            
            // Update active thumbnail
            document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        // Size Selection
        document.querySelectorAll('.size-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('selected-size').value = this.getAttribute('data-size');
            });
        });

        // Color Selection
        document.querySelectorAll('.color-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.color-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('selected-color').value = this.getAttribute('data-color');
            });
        });

        // Quantity Selector
        function changeQuantity(delta) {
            const quantityInput = document.getElementById('quantity');
            const currentQty = parseInt(quantityInput.value);
            const newQty = Math.max(1, Math.min(10, currentQty + delta));
            quantityInput.value = newQty;
            document.getElementById('selected-quantity').value = newQty;
        }

        // Tab Functionality
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // Update active tab button
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Update active tab content
                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Add to Wishlist
        document.querySelector('.add-to-wishlist').addEventListener('click', function() {
            this.classList.toggle('active');
        });
    ";
    
    // Include footer
    include 'footer.php';
?>

    <style>
        /* Product Details Styles */
        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .product-images {
            position: sticky;
            top: 100px;
        }
        
        .main-image {
            border-radius: 1rem;
            overflow: hidden;
            margin-bottom: 1rem;
            box-shadow: var(--shadow-lg);
        }
        
        .main-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .thumbnail-images {
            display: flex;
            gap: 1rem;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 0.5rem;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .thumbnail.active,
        .thumbnail:hover {
            border-color: var(--primary-color);
        }
        
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            font-size: 0.875rem;
        }
        
        .breadcrumb a {
            color: var(--text-light);
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            color: var(--primary-color);
        }
        
        .product-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .stars {
            color: var(--secondary-color);
        }
        
        .rating-text {
            font-weight: 500;
        }
        
        .review-link {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .product-price {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .current-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .original-price {
            font-size: 1.25rem;
            color: var(--text-light);
            text-decoration: line-through;
        }
        
        .discount {
            background: var(--secondary-color);
            color: var(--text-white);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .product-description {
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .product-options {
            margin-bottom: 2rem;
        }
        
        .option-group {
            margin-bottom: 1.5rem;
        }
        
        .option-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .size-options,
        .color-options {
            display: flex;
            gap: 0.5rem;
        }
        
        .size-btn {
            width: 50px;
            height: 50px;
            border: 2px solid var(--border-color);
            background: var(--bg-white);
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .size-btn:hover,
        .size-btn.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: var(--text-white);
        }
        
        .color-btn {
            width: 40px;
            height: 40px;
            border: 2px solid var(--border-color);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .color-btn:hover,
        .color-btn.active {
            border-color: var(--primary-color);
            transform: scale(1.1);
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .qty-btn {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border-color);
            background: var(--bg-white);
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .qty-btn:hover {
            background: var(--primary-color);
            color: var(--text-white);
        }
        
        #quantity {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            outline: none;
        }
        
        .product-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.125rem;
        }
        
        .product-meta {
            border-top: 1px solid var(--border-color);
            padding-top: 2rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .meta-item i {
            color: var(--primary-color);
            width: 20px;
        }
        
        /* Tabs Styles */
        .tabs-header {
            display: flex;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 2rem;
        }
        
        .tab-btn {
            padding: 1rem 2rem;
            border: none;
            background: none;
            cursor: pointer;
            font-weight: 500;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .tab-btn.active {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
        }
        
        .tab-pane {
            display: none;
        }
        
        .tab-pane.active {
            display: block;
        }
        
        .tab-pane h3 {
            margin-bottom: 1rem;
        }
        
        .specs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .spec-item {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem;
            background: var(--bg-white);
            border-radius: 0.5rem;
        }
        
        .spec-label {
            font-weight: 600;
        }
        
        .reviews-summary {
            margin-bottom: 2rem;
        }
        
        .rating-overview {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .average-rating {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .review-item {
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 0;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .review-date {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        .shipping-info h4 {
            margin: 1.5rem 0 0.5rem;
        }
        
        .shipping-info ul {
            margin-bottom: 1.5rem;
        }
        
        .shipping-info li {
            margin-bottom: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .product-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .product-images {
                position: static;
            }
            
            .product-title {
                font-size: 2rem;
            }
            
            .product-actions {
                flex-direction: column;
            }
            
            .tabs-header {
                flex-wrap: wrap;
            }
            
            .tab-btn {
                flex: 1;
                min-width: 120px;
            }
        }
    </style>
</body>
</html>