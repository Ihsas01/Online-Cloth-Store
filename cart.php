<?php
    session_start();
    require 'db_connection.php';

    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }

    // Get cart data
    $email = $_SESSION["email"];
    $sql = "SELECT p.p_id, p.p_name, p.price, p.picture, COUNT(*) AS quantity, (p.price * COUNT(*)) AS subtotal
            FROM product p
            JOIN cart c ON p.p_id = c.p_id
            WHERE c.email = '$email'
            GROUP BY p.p_id";
    $result = $mysqli->query($sql);
    
    $cartItems = [];
    $total = 0;
    $itemCount = 0;
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cartItems[] = $row;
            $total += $row["subtotal"];
            $itemCount += $row["quantity"];
        }
    }

    // Page-specific variables
    $page_title = "Shopping Cart";
    $page_description = "Review your shopping cart, update quantities, and proceed to checkout with Different Wear.";
    $page_keywords = "shopping cart, checkout, order, different wear, fashion";
    
    // Include header
    include 'header.php';
?>

    <!-- Cart Hero Section -->
    <section class="cart-hero-section">
        <div class="cart-background">
            <div class="cart-particles"></div>
            <div class="cart-shapes">
                <div class="cart-shape cart-shape-1"></div>
                <div class="cart-shape cart-shape-2"></div>
                <div class="cart-shape cart-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="cart-hero-content" data-aos="fade-up">
                <div class="cart-badge">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Your Cart</span>
                </div>
                <h1 class="cart-hero-title">
                    Shopping <span class="highlight">Cart</span>
                </h1>
                <p class="cart-hero-subtitle">
                    Review your items and proceed to checkout
                </p>
                <div class="cart-stats">
                    <div class="cart-stat">
                        <span class="stat-number"><?php echo $itemCount; ?></span>
                        <span class="stat-label">Items</span>
                    </div>
                    <div class="cart-stat">
                        <span class="stat-number"><?php echo count($cartItems); ?></span>
                        <span class="stat-label">Products</span>
                    </div>
                    <div class="cart-stat">
                        <span class="stat-number">$<?php echo number_format($total, 2); ?></span>
                        <span class="stat-label">Total</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="container">
            <?php if (empty($cartItems)): ?>
                <!-- Empty Cart State -->
                <div class="empty-cart" data-aos="fade-up">
                    <div class="empty-cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h2>Your cart is empty</h2>
                    <p>Looks like you haven't added any items to your cart yet.</p>
                    <div class="empty-cart-actions">
                        <a href="products.php" class="btn btn-primary">
                            <i class="fas fa-shopping-bag"></i>
                            <span>Start Shopping</span>
                        </a>
                        <a href="index.php" class="btn btn-outline">
                            <i class="fas fa-home"></i>
                            <span>Go Home</span>
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <!-- Cart Content -->
                <div class="cart-layout">
                    <!-- Cart Items -->
                    <div class="cart-items" data-aos="fade-right">
                        <div class="cart-header">
                            <h2>Shopping Cart (<?php echo $itemCount; ?> items)</h2>
                            <button class="btn btn-outline clear-cart-btn">
                                <i class="fas fa-trash"></i>
                                <span>Clear Cart</span>
                            </button>
                        </div>
                        
                        <div class="cart-items-list">
                            <?php foreach ($cartItems as $index => $item): ?>
                                <div class="cart-item" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                                    <div class="item-image">
                                        <img src="images/products/<?php echo $item['picture']; ?>" alt="<?php echo $item['p_name']; ?>">
                                        <button class="remove-item" data-product-id="<?php echo $item['p_id']; ?>">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="item-details">
                                        <h3 class="item-name"><?php echo $item['p_name']; ?></h3>
                                        <p class="item-price">$<?php echo number_format($item['price'], 2); ?></p>
                                        <div class="item-meta">
                                            <span class="item-id">#<?php echo $item['p_id']; ?></span>
                                            <span class="item-category">Fashion</span>
                                        </div>
                                    </div>
                                    
                                    <div class="item-quantity">
                                        <div class="quantity-controls">
                                            <button class="quantity-btn minus" data-product-id="<?php echo $item['p_id']; ?>">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="quantity-display"><?php echo $item['quantity']; ?></span>
                                            <button class="quantity-btn plus" data-product-id="<?php echo $item['p_id']; ?>">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="item-subtotal">
                                        <span class="subtotal-amount">$<?php echo number_format($item['subtotal'], 2); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <!-- Continue Shopping -->
                        <div class="continue-shopping" data-aos="fade-up">
                            <a href="products.php" class="btn btn-outline">
                                <i class="fas fa-arrow-left"></i>
                                <span>Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Cart Summary -->
                    <div class="cart-summary" data-aos="fade-left">
                        <div class="summary-card">
                            <div class="summary-header">
                                <h3>Order Summary</h3>
                                <i class="fas fa-receipt"></i>
                            </div>
                            
                            <div class="summary-items">
                                <div class="summary-item">
                                    <span>Subtotal (<?php echo $itemCount; ?> items)</span>
                                    <span>$<?php echo number_format($total, 2); ?></span>
                                </div>
                                <div class="summary-item">
                                    <span>Shipping</span>
                                    <span class="free-shipping">FREE</span>
                                </div>
                                <div class="summary-item">
                                    <span>Tax</span>
                                    <span>$<?php echo number_format($total * 0.08, 2); ?></span>
                                </div>
                                <div class="summary-divider"></div>
                                <div class="summary-total">
                                    <span>Total</span>
                                    <span>$<?php echo number_format($total * 1.08, 2); ?></span>
                                </div>
                            </div>
                            
                            <div class="summary-actions">
                                <button class="btn btn-primary checkout-btn" id="checkoutBtn">
                                    <i class="fas fa-lock"></i>
                                    <span>Proceed to Checkout</span>
                                </button>
                                <button class="btn btn-outline save-cart-btn">
                                    <i class="fas fa-heart"></i>
                                    <span>Save for Later</span>
                                </button>
                            </div>
                            
                            <div class="payment-methods">
                                <h4>We Accept</h4>
                                <div class="payment-icons">
                                    <i class="fab fa-cc-visa"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                    <i class="fab fa-cc-amex"></i>
                                    <i class="fab fa-cc-paypal"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Security Badge -->
                        <div class="security-badge">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h4>Secure Checkout</h4>
                                <p>Your payment information is protected with SSL encryption</p>
                            </div>
                        </div>
                        
                        <!-- Shipping Info -->
                        <div class="shipping-info">
                            <div class="shipping-header">
                                <i class="fas fa-truck"></i>
                                <h4>Free Shipping</h4>
                            </div>
                            <p>Free standard shipping on orders over $50</p>
                            <div class="shipping-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: <?php echo min(100, ($total / 50) * 100); ?>%"></div>
                                </div>
                                <span class="progress-text">
                                    <?php if ($total >= 50): ?>
                                        You qualify for free shipping!
                                    <?php else: ?>
                                        Add $<?php echo number_format(50 - $total, 2); ?> more for free shipping
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Related Products Section -->
    <?php if (!empty($cartItems)): ?>
    <section class="related-products-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>You Might Also Like</h2>
                <p>Complete your look with these trending items</p>
            </div>
            
            <div class="related-products-grid">
                <?php
                // Get related products (random products excluding cart items)
                $cartProductIds = array_column($cartItems, 'p_id');
                $cartIdsString = implode(',', $cartProductIds);
                $relatedSql = "SELECT * FROM product WHERE p_id NOT IN ($cartIdsString) ORDER BY RAND() LIMIT 4";
                $relatedResult = $mysqli->query($relatedSql);
                $index = 0; // Initialize index for data-aos-delay
                while ($relatedProduct = $relatedResult->fetch_assoc()):
                ?>
                <div class="related-product-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="product-image">
                        <img src="images/products/<?php echo $relatedProduct['picture']; ?>" alt="<?php echo $relatedProduct['p_name']; ?>">
                        <div class="product-overlay">
                            <button class="quick-add-btn" data-product-id="<?php echo $relatedProduct['p_id']; ?>">
                                <i class="fas fa-plus"></i>
                                <span>Quick Add</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><?php echo $relatedProduct['p_name']; ?></h4>
                        <p class="product-price">$<?php echo number_format($relatedProduct['price'], 2); ?></p>
                    </div>
                </div>
                <?php $index++; endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include 'footer.php'; ?>