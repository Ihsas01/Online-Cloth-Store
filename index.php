<?php
    // Page-specific variables
    $page_title = "Home";
    $page_description = "Premium fashion store with the latest trends and styles. Shop the best clothing collection online.";
    $page_keywords = "fashion, clothing, online store, premium clothes, trendy fashion, different-wear";
    
    // Include header
    include 'header.php';
    
    require 'db_connection.php';
?>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-background">
                <div class="hero-particles"></div>
                <div class="hero-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text" data-aos="fade-right">
                        <div class="hero-badge" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-star"></i>
                            <span>Premium Fashion Store</span>
                        </div>
                        <h1 class="hero-title">
                            Get The Best At <span class="highlight">Ones!</span>
                        </h1>
                        <p class="hero-subtitle">
                            "The Secret Of Great Style Is To Feel Good In What You Wear"
                        </p>
                        <div class="hero-buttons">
                            <a href="products.php" class="btn btn-primary btn-hero">
                                <i class="fas fa-shopping-bag"></i> 
                                <span>Shop Now</span>
                                <div class="btn-ripple"></div>
                            </a>
                            <a href="#categories" class="btn btn-secondary btn-hero">
                                <i class="fas fa-eye"></i> 
                                <span>Explore</span>
                            </a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat" data-aos="fade-up" data-aos-delay="300">
                                <span class="stat-number" data-count="10">0</span>
                                <span class="stat-label">K+ Happy Customers</span>
                            </div>
                            <div class="stat" data-aos="fade-up" data-aos-delay="400">
                                <span class="stat-number" data-count="500">0</span>
                                <span class="stat-label">+ Products</span>
                            </div>
                            <div class="stat" data-aos="fade-up" data-aos-delay="500">
                                <span class="stat-number" data-count="50">0</span>
                                <span class="stat-label">+ Brands</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="fade-left">
                        <div class="image-container">
                            <img src="images/home page.jpeg" alt="Fashion Collection" class="hero-img">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="floating-card" data-aos="slide-in-left" data-aos-delay="600">
                            <div class="card-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="card-content">
                                <h4>Premium Quality</h4>
                                <p>Best materials guaranteed</p>
                            </div>
                        </div>
                        <div class="floating-card card-2" data-aos="slide-in-right" data-aos-delay="700">
                            <div class="card-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="card-content">
                                <h4>Fast Delivery</h4>
                                <p>Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-arrow"></div>
                <span>Scroll to explore</span>
            </div>
        </div>

        <!-- Search Section -->
        <section class="search-section" data-aos="fade-up">
            <div class="container">
                <div class="search-container">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search for products, brands, or styles..." id="search-input">
                        <button class="search-btn">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    <div class="search-suggestions" id="search-suggestions">
                        <div class="suggestion-category">
                            <h4>Popular Searches</h4>
                            <div class="suggestion-tags">
                                <span class="tag">Casual Wear</span>
                                <span class="tag">Formal Shirts</span>
                                <span class="tag">Jeans</span>
                                <span class="tag">Dresses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Categories Section -->
    <section id="categories" class="categories-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-th-large"></i>
                    <span>Categories</span>
                </div>
                <h2 class="section-title">Fashion Categories</h2>
                <p class="section-subtitle">Discover your perfect style across our curated collections</p>
            </div>
            <div class="categories-grid">
                <div class="category-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="category-image">
                        <img src="images/product page/123/cat5.png" alt="Casual Wear">
                        <div class="category-overlay">
                            <a href="products.php?category=casual" class="category-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="category-badge">Popular</div>
                    </div>
                    <div class="category-content">
                        <h3>Casual Wear</h3>
                        <p>Comfortable everyday fashion</p>
                        <div class="category-meta">
                            <span class="product-count">150+ Products</span>
                            <span class="category-rating">
                                <i class="fas fa-star"></i>
                                4.8
                            </span>
                        </div>
                    </div>
                </div>
                <div class="category-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="category-image">
                        <img src="images/product page/123/cat2.png" alt="Formal Wear">
                        <div class="category-overlay">
                            <a href="products.php?category=formal" class="category-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="category-badge">New</div>
                    </div>
                    <div class="category-content">
                        <h3>Formal Wear</h3>
                        <p>Professional and elegant styles</p>
                        <div class="category-meta">
                            <span class="product-count">120+ Products</span>
                            <span class="category-rating">
                                <i class="fas fa-star"></i>
                                4.9
                            </span>
                        </div>
                    </div>
                </div>
                <div class="category-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="category-image">
                        <img src="images/product page/123/cat4.png" alt="Sportswear">
                        <div class="category-overlay">
                            <a href="products.php?category=sports" class="category-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="category-badge">Trending</div>
                    </div>
                    <div class="category-content">
                        <h3>Sportswear</h3>
                        <p>Active and athletic clothing</p>
                        <div class="category-meta">
                            <span class="product-count">200+ Products</span>
                            <span class="category-rating">
                                <i class="fas fa-star"></i>
                                4.7
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="products-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-fire"></i>
                    <span>New Arrivals</span>
                </div>
                <h2 class="section-title">Fresh Styles Just In</h2>
                <p class="section-subtitle">Be the first to discover our latest arrivals</p>
            </div>
            <div class="products-grid">
                <?php
                    $sql = "SELECT * FROM product WHERE p_type = 'new-arrival' LIMIT 8";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="product-card" data-aos="fade-up">';
                            echo '<div class="product-badge">New</div>';
                            echo '<div class="product-image">';
                            echo '<img src="images/products/'.$row['picture'].'" alt="'.$row['p_name'].'">';
                            echo '<div class="product-overlay">';
                            echo '<div class="product-actions">';
                            echo '<a href="single-product.php?p_id='.$row['p_id'].'" class="action-btn" title="View Details"><i class="fas fa-eye"></i></a>';
                            echo '<button class="action-btn add-to-cart" data-id="'.$row['p_id'].'" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>';
                            echo '<button class="action-btn add-to-wishlist" title="Add to Wishlist"><i class="fas fa-heart"></i></button>';
                            echo '<button class="action-btn quick-view" title="Quick View"><i class="fas fa-search"></i></button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="product-content">';
                            echo '<h3 class="product-title">'.$row['p_name'].'</h3>';
                            echo '<div class="product-price">$'.$row['price'].'.00</div>';
                            echo '<div class="product-rating">';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star-half-alt"></i>';
                            echo '<span>(4.5)</span>';
                            echo '</div>';
                            echo '<div class="product-meta">';
                            echo '<span class="product-category">'.$row['p_type'].'</span>';
                            echo '<span class="product-availability">In Stock</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }      
                    } else {
                        echo '<div class="no-products">No new arrivals found.</div>';
                    }
                ?>
            </div>
            <div class="section-footer" data-aos="fade-up">
                <a href="products.php" class="btn btn-outline">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Latest Fashions Section -->
    <section class="products-section bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-trending-up"></i>
                    <span>Trending</span>
                </div>
                <h2 class="section-title">Latest Fashions</h2>
                <p class="section-subtitle">Trending styles that define the season</p>
            </div>
            <div class="products-grid">
                <?php
                    $sql = "SELECT * FROM product WHERE p_type = 'latest-fashion' LIMIT 8";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="product-card" data-aos="fade-up">';
                            echo '<div class="product-badge trending">Trending</div>';
                            echo '<div class="product-image">';
                            echo '<img src="images/products/'.$row['picture'].'" alt="'.$row['p_name'].'">';
                            echo '<div class="product-overlay">';
                            echo '<div class="product-actions">';
                            echo '<a href="single-product.php?p_id='.$row['p_id'].'" class="action-btn" title="View Details"><i class="fas fa-eye"></i></a>';
                            echo '<button class="action-btn add-to-cart" data-id="'.$row['p_id'].'" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>';
                            echo '<button class="action-btn add-to-wishlist" title="Add to Wishlist"><i class="fas fa-heart"></i></button>';
                            echo '<button class="action-btn quick-view" title="Quick View"><i class="fas fa-search"></i></button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="product-content">';
                            echo '<h3 class="product-title">'.$row['p_name'].'</h3>';
                            echo '<div class="product-price">$'.$row['price'].'.00</div>';
                            echo '<div class="product-rating">';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star-half-alt"></i>';
                            echo '<span>(4.5)</span>';
                            echo '</div>';
                            echo '<div class="product-meta">';
                            echo '<span class="product-category">'.$row['p_type'].'</span>';
                            echo '<span class="product-availability">In Stock</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }      
                    } else {
                        echo '<div class="no-products">No latest fashions found.</div>';
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Why Choose Different Wear?</h2>
                <p class="section-subtitle">We provide the best shopping experience for our customers</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p>Free shipping on orders over $50</p>
                    <div class="feature-hover">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>30-day return policy for all items</p>
                    <div class="feature-hover">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Payment</h3>
                    <p>100% secure payment processing</p>
                    <div class="feature-hover">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round the clock customer support</p>
                    <div class="feature-hover">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" style="background: var(--bg-light); padding: 6rem 0;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-quote-left"></i>
                    <span>Testimonials</span>
                </div>
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Real feedback from satisfied customers</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Amazing quality and fast delivery! The clothes fit perfectly and the customer service is outstanding."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar" data-initials="SM">
                            <span>SM</span>
                        </div>
                        <div class="author-info">
                            <h4>Sarah M.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"Best online shopping experience ever! The return process was so easy and the quality exceeded my expectations."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar" data-initials="JD">
                            <span>JD</span>
                        </div>
                        <div class="author-info">
                            <h4>John D.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p>"I love the variety of styles available. The website is easy to navigate and the checkout process is smooth."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar" data-initials="EL">
                            <span>EL</span>
                        </div>
                        <div class="author-info">
                            <h4>Emma L.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-handshake"></i>
                    <span>Partners</span>
                </div>
                <h2 class="section-title">Our Trusted Brands</h2>
                <p class="section-subtitle">Partnering with the world's leading fashion brands</p>
            </div>
            <div class="brands-grid">
                <div class="brand-card" data-aos="zoom-in" data-aos-delay="100">
                    <img src="images/Untitled designqwe.png" alt="Brand 1">
                    <div class="brand-overlay">
                        <span>Premium Partner</span>
                    </div>
                </div>
                <div class="brand-card" data-aos="zoom-in" data-aos-delay="200">
                    <img src="images/axe111.png" alt="Brand 2">
                    <div class="brand-overlay">
                        <span>Featured Brand</span>
                    </div>
                </div>
                <div class="brand-card" data-aos="zoom-in" data-aos-delay="300">
                    <img src="images/add.png" alt="Brand 3">
                    <div class="brand-overlay">
                        <span>Trending Now</span>
                    </div>
                </div>
                <div class="brand-card" data-aos="zoom-in" data-aos-delay="400">
                    <img src="images/nike.png" alt="Nike">
                    <div class="brand-overlay">
                        <span>Global Partner</span>
                    </div>
                </div>
                <div class="brand-card" data-aos="zoom-in" data-aos-delay="500">
                    <img src="images/cal.png" alt="Brand 5">
                    <div class="brand-overlay">
                        <span>Exclusive</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section" style="background: var(--gradient-secondary);">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <div class="newsletter-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h2>Stay Updated with Latest Trends</h2>
                <p>Subscribe to our newsletter for exclusive offers, fashion tips, and early access to new collections</p>
                <form class="newsletter-form" id="newsletter-form">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Subscribe
                        </button>
                    </div>
                    <div class="newsletter-benefits">
                        <span><i class="fas fa-check"></i> Exclusive Offers</span>
                        <span><i class="fas fa-check"></i> Fashion Tips</span>
                        <span><i class="fas fa-check"></i> Early Access</span>
                    </div>
                </form>
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

        // Animated Counter for Stats
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 20);
        }

        // Trigger counter animation when stats are visible
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumber = entry.target;
                    const target = parseInt(statNumber.getAttribute('data-count'));
                    animateCounter(statNumber, target);
                    observer.unobserve(statNumber);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-number').forEach(stat => {
            observer.observe(stat);
        });

        // Search Functionality
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('search-suggestions');
        const searchBtn = document.querySelector('.search-btn');

        searchInput.addEventListener('focus', () => {
            searchSuggestions.style.display = 'block';
        });

        searchInput.addEventListener('blur', () => {
            setTimeout(() => {
                searchSuggestions.style.display = 'none';
            }, 200);
        });

        searchBtn.addEventListener('click', () => {
            const query = searchInput.value.trim();
            if (query) {
                window.location.href = 'products.php?search=' + encodeURIComponent(query);
            }
        });

        // Tag click functionality
        document.querySelectorAll('.tag').forEach(tag => {
            tag.addEventListener('click', () => {
                searchInput.value = tag.textContent;
                searchBtn.click();
            });
        });

        // Add to Cart Functionality with enhanced feedback
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const originalHTML = this.innerHTML;
                
                // Add loading state
                this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i>';
                this.classList.add('loading');
                
                // Simulate API call
                setTimeout(() => {
                    this.innerHTML = '<i class=\"fas fa-check\"></i>';
                    this.classList.remove('loading');
                    this.classList.add('added');
                    
                    // Show notification
                    showNotification('Product added to cart successfully!', 'success');
                    
                    // Reset after 2 seconds
                    setTimeout(() => {
                        this.innerHTML = originalHTML;
                        this.classList.remove('added');
                    }, 2000);
                }, 1000);
            });
        });

        // Add to Wishlist Functionality
        document.querySelectorAll('.add-to-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                const isActive = this.classList.contains('active');
                
                if (isActive) {
                    this.classList.remove('active');
                    showNotification('Removed from wishlist', 'info');
                } else {
                    this.classList.add('active');
                    showNotification('Added to wishlist!', 'success');
                }
            });
        });

        // Quick View Functionality
        document.querySelectorAll('.quick-view').forEach(button => {
            button.addEventListener('click', function() {
                showNotification('Quick view feature coming soon!', 'info');
            });
        });

        // Newsletter Form
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type=\"email\"]').value;
            
            if (email) {
                // Show loading state
                const submitBtn = this.querySelector('button[type=\"submit\"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Subscribing...';
                submitBtn.disabled = true;
                
                // Simulate subscription
                setTimeout(() => {
                    showNotification('Successfully subscribed to newsletter!', 'success');
                    this.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            }
        });

        // Feature Card Hover Effects
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Testimonial Card Interactions
        document.querySelectorAll('.testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Brand Card Hover Effects
        document.querySelectorAll('.brand-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.brand-overlay').style.opacity = '1';
            });
            
            card.addEventListener('mouseleave', function() {
                this.querySelector('.brand-overlay').style.opacity = '0';
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

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

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
            }
        });

        // Initialize particles effect
        function createParticles() {
            const particlesContainer = document.querySelector('.hero-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createParticles);
    ";
    
    // Include footer
    include 'footer.php';
?>