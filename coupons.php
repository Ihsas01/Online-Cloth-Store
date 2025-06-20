<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Coupons & Deals";
    $page_description = "Discover amazing discounts, promo codes, and special offers on Different Wear fashion. Save big on your favorite styles!";
    $page_keywords = "coupons, discounts, promo codes, deals, offers, different wear, fashion savings";
    
    // Include header
    include 'header.php';
?>

    <!-- Coupons Hero Section -->
    <section class="coupons-hero-section">
        <div class="coupons-background">
            <div class="coupons-particles"></div>
            <div class="coupons-shapes">
                <div class="coupons-shape coupons-shape-1"></div>
                <div class="coupons-shape coupons-shape-2"></div>
                <div class="coupons-shape coupons-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="coupons-hero-content" data-aos="fade-up">
                <div class="coupons-badge">
                    <i class="fas fa-tags"></i>
                    <span>Special Offers</span>
                </div>
                <h1 class="coupons-hero-title">
                    <span class="highlight">Save Big</span> on Fashion
                </h1>
                <p class="coupons-hero-subtitle">
                    Exclusive discounts and promo codes for Different Wear customers
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Offers Section -->
    <section class="featured-offers-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Featured Offers</h2>
                <p>Limited time deals you don't want to miss</p>
            </div>
            
            <div class="featured-offers-grid">
                <div class="featured-offer" data-aos="fade-up" data-aos-delay="100">
                    <div class="offer-badge">LIMITED TIME</div>
                    <div class="offer-content">
                        <div class="offer-discount">
                            <span class="discount-amount">50%</span>
                            <span class="discount-text">OFF</span>
                        </div>
                        <h3>New Customer Special</h3>
                        <p>Get 50% off your first order when you sign up</p>
                        <div class="offer-code">
                            <span>Use Code:</span>
                            <code>WELCOME50</code>
                            <button class="copy-btn" data-code="WELCOME50">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <div class="offer-validity">
                            <i class="fas fa-clock"></i>
                            <span>Valid until Dec 31, 2024</span>
                        </div>
                    </div>
                </div>
                
                <div class="featured-offer" data-aos="fade-up" data-aos-delay="200">
                    <div class="offer-badge">FLASH SALE</div>
                    <div class="offer-content">
                        <div class="offer-discount">
                            <span class="discount-amount">30%</span>
                            <span class="discount-text">OFF</span>
                        </div>
                        <h3>Weekend Sale</h3>
                        <p>30% off all weekend wear and casual clothing</p>
                        <div class="offer-code">
                            <span>Use Code:</span>
                            <code>WEEKEND30</code>
                            <button class="copy-btn" data-code="WEEKEND30">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <div class="offer-validity">
                            <i class="fas fa-clock"></i>
                            <span>Valid until Sunday</span>
                        </div>
                    </div>
                </div>
                
                <div class="featured-offer" data-aos="fade-up" data-aos-delay="300">
                    <div class="offer-badge">FREE SHIPPING</div>
                    <div class="offer-content">
                        <div class="offer-discount">
                            <span class="discount-amount">FREE</span>
                            <span class="discount-text">SHIPPING</span>
                        </div>
                        <h3>Free Shipping on Orders $50+</h3>
                        <p>No code needed - automatically applied at checkout</p>
                        <div class="offer-code">
                            <span>No Code Required</span>
                        </div>
                        <div class="offer-validity">
                            <i class="fas fa-clock"></i>
                            <span>Always Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Coupons Section -->
    <section class="all-coupons-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>All Available Coupons</h2>
                <p>Browse through all our current offers and discounts</p>
            </div>
            
            <div class="coupons-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All Offers</button>
                <button class="filter-btn" data-filter="percentage">Percentage Off</button>
                <button class="filter-btn" data-filter="fixed">Fixed Amount</button>
                <button class="filter-btn" data-filter="shipping">Free Shipping</button>
            </div>
            
            <div class="coupons-grid">
                <div class="coupon-card" data-category="percentage" data-aos="fade-up" data-aos-delay="100">
                    <div class="coupon-header">
                        <div class="coupon-type">Percentage Off</div>
                        <div class="coupon-expiry">Expires: Dec 31, 2024</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">25%</span>
                            <span class="discount-type">OFF</span>
                        </div>
                        <div class="coupon-details">
                            <h3>Student Discount</h3>
                            <p>25% off for students with valid ID</p>
                            <div class="coupon-code">
                                <code>STUDENT25</code>
                                <button class="copy-code-btn" data-code="STUDENT25">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="coupon-card" data-category="fixed" data-aos="fade-up" data-aos-delay="200">
                    <div class="coupon-header">
                        <div class="coupon-type">Fixed Amount</div>
                        <div class="coupon-expiry">Expires: Jan 15, 2025</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">$20</span>
                            <span class="discount-type">OFF</span>
                        </div>
                        <div class="coupon-details">
                            <h3>New Year Savings</h3>
                            <p>$20 off orders over $100</p>
                            <div class="coupon-code">
                                <code>NEWYEAR20</code>
                                <button class="copy-code-btn" data-code="NEWYEAR20">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="coupon-card" data-category="percentage" data-aos="fade-up" data-aos-delay="300">
                    <div class="coupon-header">
                        <div class="coupon-type">Percentage Off</div>
                        <div class="coupon-expiry">Expires: Feb 28, 2025</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">15%</span>
                            <span class="discount-type">OFF</span>
                        </div>
                        <div class="coupon-details">
                            <h3>Loyalty Reward</h3>
                            <p>15% off for returning customers</p>
                            <div class="coupon-code">
                                <code>LOYAL15</code>
                                <button class="copy-code-btn" data-code="LOYAL15">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="coupon-card" data-category="shipping" data-aos="fade-up" data-aos-delay="400">
                    <div class="coupon-header">
                        <div class="coupon-type">Free Shipping</div>
                        <div class="coupon-expiry">Always Available</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">FREE</span>
                            <span class="discount-type">SHIPPING</span>
                        </div>
                        <div class="coupon-details">
                            <h3>Express Shipping</h3>
                            <p>Free express shipping on orders $75+</p>
                            <div class="coupon-code">
                                <code>EXPRESSFREE</code>
                                <button class="copy-code-btn" data-code="EXPRESSFREE">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="coupon-card" data-category="percentage" data-aos="fade-up" data-aos-delay="500">
                    <div class="coupon-header">
                        <div class="coupon-type">Percentage Off</div>
                        <div class="coupon-expiry">Expires: Mar 31, 2025</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">40%</span>
                            <span class="discount-type">OFF</span>
                        </div>
                        <div class="coupon-details">
                            <h3>Clearance Sale</h3>
                            <p>40% off all clearance items</p>
                            <div class="coupon-code">
                                <code>CLEARANCE40</code>
                                <button class="copy-code-btn" data-code="CLEARANCE40">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="coupon-card" data-category="fixed" data-aos="fade-up" data-aos-delay="600">
                    <div class="coupon-header">
                        <div class="coupon-type">Fixed Amount</div>
                        <div class="coupon-expiry">Expires: Apr 30, 2025</div>
                    </div>
                    <div class="coupon-body">
                        <div class="coupon-discount">
                            <span class="discount-value">$10</span>
                            <span class="discount-type">OFF</span>
                        </div>
                        <div class="coupon-details">
                            <h3>App Download Bonus</h3>
                            <p>$10 off when you download our mobile app</p>
                            <div class="coupon-code">
                                <code>APP10</code>
                                <button class="copy-code-btn" data-code="APP10">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Use Section -->
    <section class="how-to-use-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>How to Use Your Coupons</h2>
                <p>Simple steps to save money on your purchases</p>
            </div>
            
            <div class="steps-grid">
                <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Add Items to Cart</h3>
                    <p>Browse our collection and add your favorite items to your shopping cart</p>
                </div>
                
                <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Enter Coupon Code</h3>
                    <p>Copy your desired coupon code and paste it in the promo code field at checkout</p>
                </div>
                
                <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Apply & Save</h3>
                    <p>Click apply and watch your total savings appear instantly</p>
                </div>
                
                <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Complete Purchase</h3>
                    <p>Review your discounted total and complete your purchase</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Section -->
    <section class="terms-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Terms & Conditions</h2>
                <p>Important information about our coupon usage</p>
            </div>
            
            <div class="terms-content" data-aos="fade-up">
                <div class="terms-grid">
                    <div class="term-item">
                        <h3><i class="fas fa-info-circle"></i> General Terms</h3>
                        <ul>
                            <li>Coupons cannot be combined with other offers</li>
                            <li>One coupon per order</li>
                            <li>Coupons are valid for online purchases only</li>
                            <li>Some exclusions may apply</li>
                        </ul>
                    </div>
                    
                    <div class="term-item">
                        <h3><i class="fas fa-calendar-alt"></i> Expiration</h3>
                        <ul>
                            <li>All coupons have expiration dates</li>
                            <li>Expired coupons cannot be used</li>
                            <li>We reserve the right to modify or cancel offers</li>
                            <li>Check individual coupon for specific terms</li>
                        </ul>
                    </div>
                    
                    <div class="term-item">
                        <h3><i class="fas fa-dollar-sign"></i> Minimum Purchase</h3>
                        <ul>
                            <li>Some coupons require minimum purchase amounts</li>
                            <li>Shipping costs may not count toward minimum</li>
                            <li>Taxes are calculated after discount</li>
                            <li>Clearance items may have additional restrictions</li>
                        </ul>
                    </div>
                    
                    <div class="term-item">
                        <h3><i class="fas fa-undo"></i> Returns & Refunds</h3>
                        <ul>
                            <li>Coupon savings are not refundable</li>
                            <li>Returns are processed at discounted price</li>
                            <li>Used coupons cannot be reused</li>
                            <li>Contact customer service for questions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="coupons-newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <div class="newsletter-icon">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <h2>Get Exclusive Offers First</h2>
                <p>Subscribe to our newsletter and be the first to know about new coupons, sales, and special offers</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i>
                            <span>Subscribe</span>
                        </button>
                    </div>
                </form>
                <div class="newsletter-benefits">
                    <span><i class="fas fa-check"></i> Weekly deals</span>
                    <span><i class="fas fa-check"></i> Early access</span>
                    <span><i class="fas fa-check"></i> Exclusive codes</span>
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

        // Copy coupon codes
        document.querySelectorAll('.copy-btn, .copy-code-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const code = this.getAttribute('data-code');
                navigator.clipboard.writeText(code).then(() => {
                    // Show success message
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class=\"fas fa-check\"></i>';
                    this.style.background = '#10b981';
                    
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.background = '';
                    }, 2000);
                    
                    showNotification('Coupon code copied to clipboard!', 'success');
                });
            });
        });

        // Filter coupons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active filter
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filter coupons
                document.querySelectorAll('.coupon-card').forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type=\"email\"]').value;
            
            // Simulate subscription
            showNotification('Thank you for subscribing! You\'ll receive exclusive offers soon.', 'success');
            this.reset();
        });

        // Initialize particles effect
        function createCouponsParticles() {
            const particlesContainer = document.querySelector('.coupons-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'coupons-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createCouponsParticles);

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