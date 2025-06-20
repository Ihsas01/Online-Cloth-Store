<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Shipping Information";
    $page_description = "Learn about Different Wear's shipping options, delivery times, and tracking information. Fast, reliable shipping to your doorstep.";
    $page_keywords = "shipping, delivery, tracking, different wear shipping, free shipping";
    
    // Include header
    include 'header.php';
?>

    <!-- Shipping Hero Section -->
    <section class="shipping-hero-section">
        <div class="shipping-background">
            <div class="shipping-particles"></div>
            <div class="shipping-shapes">
                <div class="shipping-shape shipping-shape-1"></div>
                <div class="shipping-shape shipping-shape-2"></div>
                <div class="shipping-shape shipping-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="shipping-hero-content" data-aos="fade-up">
                <div class="shipping-badge">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Shipping Info</span>
                </div>
                <h1 class="shipping-hero-title">
                    <span class="highlight">Fast & Reliable</span> Shipping
                </h1>
                <p class="shipping-hero-subtitle">
                    Get your fashion items delivered quickly and safely to your doorstep
                </p>
                
                <!-- Shipping Stats -->
                <div class="shipping-stats" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-item">
                        <div class="stat-number" data-target="99">0</div>
                        <div class="stat-label">% On-Time Delivery</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="24">0</div>
                        <div class="stat-label">Hour Processing</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="50">0</div>
                        <div class="stat-label">Countries Served</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Options Section -->
    <section class="shipping-options-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Shipping Options</h2>
                <p>Choose the delivery option that works best for you</p>
            </div>
            
            <div class="shipping-options-grid">
                <div class="shipping-option" data-aos="fade-up" data-aos-delay="100">
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="option-badge">Most Popular</div>
                    </div>
                    <div class="option-content">
                        <h3>Standard Shipping</h3>
                        <div class="option-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>5-7 Business Days</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-dollar-sign"></i>
                                <span>Free on orders $50+</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-box"></i>
                                <span>Package Protection</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Basic Tracking</span>
                            </div>
                        </div>
                        <div class="option-price">
                            <span class="price">$5.99</span>
                            <span class="price-note">or FREE on orders $50+</span>
                        </div>
                        <div class="option-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Best value for most customers</span>
                        </div>
                    </div>
                </div>
                
                <div class="shipping-option" data-aos="fade-up" data-aos-delay="200">
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="option-badge">Fastest</div>
                    </div>
                    <div class="option-content">
                        <h3>Express Shipping</h3>
                        <div class="option-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>2-3 Business Days</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Priority Handling</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Real-time Tracking</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-bell"></i>
                                <span>Delivery Notifications</span>
                            </div>
                        </div>
                        <div class="option-price">
                            <span class="price">$12.99</span>
                            <span class="price-note">or FREE on orders $100+</span>
                        </div>
                        <div class="option-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Perfect for last-minute gifts</span>
                        </div>
                    </div>
                </div>
                
                <div class="shipping-option" data-aos="fade-up" data-aos-delay="300">
                    <div class="option-header">
                        <div class="option-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="option-badge">Overnight</div>
                    </div>
                    <div class="option-content">
                        <h3>Overnight Shipping</h3>
                        <div class="option-details">
                            <div class="detail-item">
                                <i class="fas fa-clock"></i>
                                <span>Next Business Day</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-star"></i>
                                <span>Premium Service</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-bell"></i>
                                <span>Delivery Notifications</span>
                            </div>
                            <div class="detail-item">
                                <i class="fas fa-headset"></i>
                                <span>Priority Support</span>
                            </div>
                        </div>
                        <div class="option-price">
                            <span class="price">$24.99</span>
                            <span class="price-note">Available for most locations</span>
                        </div>
                        <div class="option-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>For urgent deliveries only</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery Timeline Section -->
    <section class="delivery-timeline-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>What Happens After You Order</h2>
                <p>Your journey from order to delivery</p>
            </div>
            
            <div class="timeline-container">
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-marker">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Order Placed</h3>
                        <p>Your order is received and confirmed</p>
                        <span class="timeline-time">Immediate</span>
                        <div class="timeline-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-marker">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Order Confirmed</h3>
                        <p>We verify your order and payment</p>
                        <span class="timeline-time">Within 1 hour</span>
                        <div class="timeline-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-marker">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Processing</h3>
                        <p>Your items are picked and packed</p>
                        <span class="timeline-time">1-2 business days</span>
                        <div class="timeline-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-marker">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Shipped</h3>
                        <p>Your package is on its way</p>
                        <span class="timeline-time">Tracking number sent</span>
                        <div class="timeline-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="timeline-marker">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="timeline-content">
                        <h3>Delivered</h3>
                        <p>Your package arrives at your door</p>
                        <span class="timeline-time">Based on shipping option</span>
                        <div class="timeline-progress">
                            <div class="progress-bar" data-progress="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section class="tracking-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Track Your Order</h2>
                <p>Stay updated on your package's journey</p>
            </div>
            
            <div class="tracking-container" data-aos="fade-up">
                <div class="tracking-form">
                    <div class="form-group">
                        <label for="tracking-number">Tracking Number</label>
                        <input type="text" id="tracking-number" placeholder="Enter your tracking number (e.g., DW123456789)">
                        <div class="input-hint">Example: DW123456789</div>
                    </div>
                    <button class="track-btn" id="track-btn">
                        <i class="fas fa-search"></i>
                        <span>Track Package</span>
                    </button>
                </div>
                
                <!-- Tracking Result Display -->
                <div class="tracking-result" id="tracking-result" style="display: none;">
                    <div class="result-header">
                        <h3>Tracking Information</h3>
                        <span class="tracking-number-display"></span>
                    </div>
                    <div class="tracking-timeline">
                        <div class="tracking-step completed">
                            <div class="step-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="step-content">
                                <h4>Package Picked Up</h4>
                                <p>Package has been picked up from our warehouse</p>
                                <span class="step-time">Today, 2:30 PM</span>
                            </div>
                        </div>
                        <div class="tracking-step active">
                            <div class="step-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="step-content">
                                <h4>In Transit</h4>
                                <p>Package is on its way to your location</p>
                                <span class="step-time">Estimated: Tomorrow</span>
                            </div>
                        </div>
                        <div class="tracking-step">
                            <div class="step-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="step-content">
                                <h4>Out for Delivery</h4>
                                <p>Package will be delivered today</p>
                                <span class="step-time">Estimated: 2-4 PM</span>
                            </div>
                        </div>
                        <div class="tracking-step">
                            <div class="step-icon">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <div class="step-content">
                                <h4>Delivered</h4>
                                <p>Package has been delivered</p>
                                <span class="step-time">Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tracking-info">
                    <div class="info-item">
                        <i class="fas fa-info-circle"></i>
                        <span>Tracking numbers are sent via email after your order ships</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Tracking updates are available 24/7</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Get notifications on your phone</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>Email updates sent automatically</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- International Shipping Section -->
    <section class="international-shipping-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>International Shipping</h2>
                <p>We ship worldwide to bring fashion to everyone</p>
            </div>
            
            <div class="international-grid">
                <div class="international-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        <i class="fas fa-globe"></i>
                        <h3>Worldwide Delivery</h3>
                    </div>
                    <div class="card-content">
                        <p>We ship to over 50 countries worldwide, bringing Different Wear fashion to customers around the globe.</p>
                        <ul>
                            <li>Standard: 7-14 business days</li>
                            <li>Express: 3-7 business days</li>
                            <li>Customs duties may apply</li>
                        </ul>
                    </div>
                </div>
                
                <div class="international-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-header">
                        <i class="fas fa-calculator"></i>
                        <h3>Shipping Costs</h3>
                    </div>
                    <div class="card-content">
                        <p>International shipping costs vary by location and package weight. Calculate shipping at checkout.</p>
                        <ul>
                            <li>Canada: $15.99 - $25.99</li>
                            <li>Europe: $19.99 - $35.99</li>
                            <li>Asia: $22.99 - $39.99</li>
                            <li>Australia: $24.99 - $42.99</li>
                        </ul>
                    </div>
                </div>
                
                <div class="international-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-header">
                        <i class="fas fa-file-contract"></i>
                        <h3>Customs & Duties</h3>
                    </div>
                    <div class="card-content">
                        <p>International orders may be subject to customs duties and taxes, which are the responsibility of the recipient.</p>
                        <ul>
                            <li>Duties vary by country</li>
                            <li>Taxes calculated at delivery</li>
                            <li>No hidden fees from us</li>
                            <li>Contact local customs for rates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping FAQ Section -->
    <section class="shipping-faq-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Shipping FAQ</h2>
                <p>Common questions about shipping and delivery</p>
            </div>
            
            <div class="faq-container" data-aos="fade-up">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does shipping take?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Shipping times vary by option: Standard (5-7 business days), Express (2-3 business days), and Overnight (next business day). International shipping takes 7-14 business days.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you offer free shipping?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We offer free standard shipping on all orders $50 and above within the United States. International orders have different minimums.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I change my shipping address?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can change your shipping address within 1 hour of placing your order by contacting our customer service team.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What if my package is lost or damaged?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We provide package protection on all shipments. If your package is lost or damaged, contact us immediately and we'll help resolve the issue.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you ship on weekends?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We process and ship orders Monday through Friday. Orders placed on weekends will be processed the next business day.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I pick up my order in store?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Currently, we only offer online shipping. We're working on adding in-store pickup options in the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="shipping-support-section">
        <div class="container">
            <div class="support-content" data-aos="fade-up">
                <div class="support-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h2>Need Help with Shipping?</h2>
                <p>Our customer service team is here to help with any shipping questions or concerns</p>
                <div class="support-options">
                    <a href="contact.php" class="support-btn">
                        <i class="fas fa-envelope"></i>
                        <span>Contact Us</span>
                    </a>
                    <a href="tel:+1-800-123-4567" class="support-btn">
                        <i class="fas fa-phone"></i>
                        <span>Call Us</span>
                    </a>
                    <a href="#" class="support-btn">
                        <i class="fas fa-comments"></i>
                        <span>Live Chat</span>
                    </a>
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

        // Animate shipping stats
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current);
                }, 16);
            });
        }

        // Animate progress bars
        function animateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-bar');
            
            progressBars.forEach(bar => {
                const progress = bar.getAttribute('data-progress');
                setTimeout(() => {
                    bar.style.width = progress + '%';
                }, 500);
            });
        }

        // Track package functionality
        document.getElementById('track-btn').addEventListener('click', function() {
            const trackingNumber = document.getElementById('tracking-number').value;
            const trackingResult = document.getElementById('tracking-result');
            
            if (!trackingNumber.trim()) {
                showNotification('Please enter a tracking number', 'error');
                return;
            }
            
            // Validate tracking number format (DW + 9 digits)
            const trackingRegex = /^DW\\d{9}$/;
            if (!trackingRegex.test(trackingNumber.trim())) {
                showNotification('Please enter a valid tracking number (e.g., DW123456789)', 'error');
                return;
            }
            
            // Simulate tracking
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i><span>Tracking...</span>';
            this.disabled = true;
            
            setTimeout(() => {
                this.innerHTML = '<i class=\"fas fa-search\"></i><span>Track Package</span>';
                this.disabled = false;
                
                // Show tracking result
                document.querySelector('.tracking-number-display').textContent = trackingNumber.trim();
                trackingResult.style.display = 'block';
                trackingResult.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                showNotification('Tracking information displayed successfully', 'success');
            }, 2000);
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const answer = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Close other FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                        const otherAnswer = item.querySelector('.faq-answer');
                        const otherIcon = item.querySelector('.faq-question i');
                        otherAnswer.style.maxHeight = '0';
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle active state
                faqItem.classList.toggle('active');
                
                // Toggle answer visibility
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    answer.style.maxHeight = '0';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Initialize particles effect
        function createShippingParticles() {
            const particlesContainer = document.querySelector('.shipping-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'shipping-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Shipping option hover effects
        document.querySelectorAll('.shipping-option').forEach(option => {
            option.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            option.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Timeline item hover effects
        document.querySelectorAll('.timeline-content').forEach(content => {
            content.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            content.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Support button hover effects
        document.querySelectorAll('.support-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Live chat simulation
        document.querySelector('.support-btn[href=\"#\"]').addEventListener('click', function(e) {
            e.preventDefault();
            showNotification('Live chat feature coming soon! Please use email or phone support for now.', 'info');
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
                    if (document.body.contains(notification)) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 5000);
            
            // Close button
            notification.querySelector('.notification-close').addEventListener('click', () => {
                notification.classList.remove('show');
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            });
        }

        // Initialize everything when page loads
        window.addEventListener('load', function() {
            createShippingParticles();
            
            // Animate stats when they come into view
            const statsSection = document.querySelector('.shipping-stats');
            if (statsSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateStats();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                observer.observe(statsSection);
            }
            
            // Animate progress bars when timeline comes into view
            const timelineSection = document.querySelector('.timeline-container');
            if (timelineSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateProgressBars();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                observer.observe(timelineSection);
            }
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
    ";
    
    // Include footer
    include 'footer.php';
?> 