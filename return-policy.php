<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Return Policy";
    $page_description = "Learn about Different Wear's return and refund policy. Easy returns, quick refunds, and hassle-free exchanges for your peace of mind.";
    $page_keywords = "return policy, refund policy, exchanges, different wear returns, customer service";
    
    // Include header
    include 'header.php';
?>

    <!-- Return Policy Hero Section -->
    <section class="return-hero-section">
        <div class="return-background">
            <div class="return-particles"></div>
            <div class="return-shapes">
                <div class="return-shape return-shape-1"></div>
                <div class="return-shape return-shape-2"></div>
                <div class="return-shape return-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="return-hero-content" data-aos="fade-up">
                <div class="return-badge">
                    <i class="fas fa-undo"></i>
                    <span>Return Policy</span>
                </div>
                <h1 class="return-hero-title">
                    <span class="highlight">Easy Returns</span> & Exchanges
                </h1>
                <p class="return-hero-subtitle">
                    Shop with confidence knowing you can return or exchange items hassle-free
                </p>
                
                <!-- Return Policy Stats -->
                <div class="return-stats">
                    <div class="return-stat">
                        <div class="stat-number">30</div>
                        <div class="stat-label">Days to Return</div>
                    </div>
                    <div class="return-stat">
                        <div class="stat-number">Free</div>
                        <div class="stat-label">Return Shipping</div>
                    </div>
                    <div class="return-stat">
                        <div class="stat-number">3-5</div>
                        <div class="stat-label">Days for Refund</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Overview Section -->
    <section class="quick-overview-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Why Choose Our Return Policy?</h2>
                <p>We make returns simple and stress-free</p>
            </div>
            
            <div class="overview-grid">
                <div class="overview-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="overview-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>30-Day Returns</h3>
                    <p>Return items within 30 days of delivery for a full refund</p>
                    <div class="card-hover-effect"></div>
                </div>
                
                <div class="overview-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="overview-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Free Returns</h3>
                    <p>Free return shipping on all orders within the US</p>
                    <div class="card-hover-effect"></div>
                </div>
                
                <div class="overview-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="overview-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Easy Exchanges</h3>
                    <p>Exchange for different sizes or colors at no extra cost</p>
                    <div class="card-hover-effect"></div>
                </div>
                
                <div class="overview-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="overview-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Quick Refunds</h3>
                    <p>Refunds processed within 3-5 business days</p>
                    <div class="card-hover-effect"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Return Process Section -->
    <section class="return-process-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>How to Return Items</h2>
                <p>Simple steps to return your purchase</p>
            </div>
            
            <!-- Progress Indicator -->
            <div class="return-progress" data-aos="fade-up">
                <div class="progress-line">
                    <div class="progress-fill"></div>
                </div>
                <div class="progress-steps">
                    <div class="progress-step active" data-step="1">
                        <div class="step-marker">1</div>
                        <span>Login</span>
                    </div>
                    <div class="progress-step" data-step="2">
                        <div class="step-marker">2</div>
                        <span>Select</span>
                    </div>
                    <div class="progress-step" data-step="3">
                        <div class="step-marker">3</div>
                        <span>Print</span>
                    </div>
                    <div class="progress-step" data-step="4">
                        <div class="step-marker">4</div>
                        <span>Ship</span>
                    </div>
                    <div class="progress-step" data-step="5">
                        <div class="step-marker">5</div>
                        <span>Refund</span>
                    </div>
                </div>
            </div>
            
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100" data-step="1">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3>Log into Your Account</h3>
                        <p>Sign in to your Different Wear account and go to your order history</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Keep your order confirmation email handy</span>
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="200" data-step="2">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h3>Select Items to Return</h3>
                        <p>Choose the items you want to return and specify the reason</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: You can return multiple items from the same order</span>
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="300" data-step="3">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <h3>Print Return Label</h3>
                        <p>Print the prepaid return shipping label provided</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Use a printer with good quality for clear labels</span>
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="400" data-step="4">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3>Ship Your Return</h3>
                        <p>Package your items securely and drop off at any USPS location</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Keep your tracking number for reference</span>
                        </div>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="500" data-step="5">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Get Your Refund</h3>
                        <p>Receive your refund within 3-5 business days after we receive your return</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: You'll receive an email confirmation when refund is processed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Return Policy Details Section -->
    <section class="policy-details-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Return Policy Details</h2>
                <p>Everything you need to know about our return policy</p>
            </div>
            
            <div class="policy-grid">
                <div class="policy-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="policy-header">
                        <i class="fas fa-clock"></i>
                        <h3>Return Window</h3>
                    </div>
                    <div class="policy-content">
                        <ul>
                            <li>30 days from the date of delivery</li>
                            <li>Items must be in original condition</li>
                            <li>All original tags and packaging included</li>
                            <li>Unworn and unwashed items only</li>
                        </ul>
                        <div class="policy-note">
                            <i class="fas fa-info-circle"></i>
                            <span>Extended return period during holiday season</span>
                        </div>
                    </div>
                </div>
                
                <div class="policy-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="policy-header">
                        <i class="fas fa-shipping-fast"></i>
                        <h3>Shipping & Returns</h3>
                    </div>
                    <div class="policy-content">
                        <ul>
                            <li>Free return shipping within the US</li>
                            <li>International returns: customer pays shipping</li>
                            <li>Prepaid return labels provided</li>
                            <li>Track your return status online</li>
                        </ul>
                        <div class="policy-note">
                            <i class="fas fa-info-circle"></i>
                            <span>Returns must be initiated within 30 days</span>
                        </div>
                    </div>
                </div>
                
                <div class="policy-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="policy-header">
                        <i class="fas fa-credit-card"></i>
                        <h3>Refunds</h3>
                    </div>
                    <div class="policy-content">
                        <ul>
                            <li>Full refund to original payment method</li>
                            <li>Processing time: 3-5 business days</li>
                            <li>Email confirmation when refund is issued</li>
                            <li>Bank processing may take additional time</li>
                        </ul>
                        <div class="policy-note">
                            <i class="fas fa-info-circle"></i>
                            <span>Refunds processed after return inspection</span>
                        </div>
                    </div>
                </div>
                
                <div class="policy-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="policy-header">
                        <i class="fas fa-exchange-alt"></i>
                        <h3>Exchanges</h3>
                    </div>
                    <div class="policy-content">
                        <ul>
                            <li>Free exchanges for different sizes/colors</li>
                            <li>Exchange for items of equal or lesser value</li>
                            <li>Price difference refunded for lower value items</li>
                            <li>Additional payment required for higher value items</li>
                        </ul>
                        <div class="policy-note">
                            <i class="fas fa-info-circle"></i>
                            <span>Exchanges subject to item availability</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Non-Returnable Items Section -->
    <section class="non-returnable-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Non-Returnable Items</h2>
                <p>Items that cannot be returned for safety and hygiene reasons</p>
            </div>
            
            <div class="non-returnable-grid" data-aos="fade-up">
                <div class="non-returnable-item">
                    <div class="item-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Underwear & Swimwear</h3>
                    <p>For hygiene reasons, underwear, swimwear, and intimate apparel cannot be returned unless defective</p>
                    <div class="item-exception">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Exception: Manufacturing defects only</span>
                    </div>
                </div>
                
                <div class="non-returnable-item">
                    <div class="item-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Jewelry & Accessories</h3>
                    <p>Personalized jewelry and accessories cannot be returned unless there's a manufacturing defect</p>
                    <div class="item-exception">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Exception: Manufacturing defects only</span>
                    </div>
                </div>
                
                <div class="non-returnable-item">
                    <div class="item-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Sale & Clearance Items</h3>
                    <p>Items marked as final sale or clearance cannot be returned or exchanged</p>
                    <div class="item-exception">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Exception: Manufacturing defects only</span>
                    </div>
                </div>
                
                <div class="non-returnable-item">
                    <div class="item-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Gift Cards</h3>
                    <p>Gift cards and promotional codes are non-refundable and non-returnable</p>
                    <div class="item-exception">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Exception: No exceptions for gift cards</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="return-faq-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Common questions about our return policy</p>
            </div>
            
            <div class="faq-container" data-aos="fade-up">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long do I have to return an item?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You have 30 days from the date of delivery to return your item. The return window starts the day your order is delivered to your shipping address.</p>
                        <div class="faq-note">
                            <i class="fas fa-clock"></i>
                            <span>Extended to 45 days during holiday season (Nov 1 - Jan 15)</span>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do I have to pay for return shipping?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, we provide free return shipping for all orders within the United States. International customers are responsible for return shipping costs.</p>
                        <div class="faq-note">
                            <i class="fas fa-shipping-fast"></i>
                            <span>Free return labels are automatically generated</span>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does it take to get my refund?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Once we receive your return, we process refunds within 3-5 business days. The time it takes for the refund to appear in your account depends on your bank or credit card company.</p>
                        <div class="faq-note">
                            <i class="fas fa-credit-card"></i>
                            <span>You'll receive an email confirmation when refund is processed</span>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I exchange an item for a different size?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, you can exchange items for different sizes or colors at no additional cost. Simply select the exchange option when initiating your return.</p>
                        <div class="faq-note">
                            <i class="fas fa-exchange-alt"></i>
                            <span>Exchanges are subject to item availability</span>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What if my item arrives damaged?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>If your item arrives damaged, please contact our customer service team immediately. We'll arrange for a replacement or refund at no cost to you.</p>
                        <div class="faq-note">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>Please take photos of the damage for faster processing</span>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I return items purchased with a gift card?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, items purchased with a gift card can be returned. The refund will be issued as store credit to your account.</p>
                        <div class="faq-note">
                            <i class="fas fa-gift"></i>
                            <span>Store credit never expires and can be used for future purchases</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="contact-support-section">
        <div class="container">
            <div class="support-content" data-aos="fade-up">
                <div class="support-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h2>Need Help with Your Return?</h2>
                <p>Our customer service team is here to help you with any questions about returns, exchanges, or refunds</p>
                
                <!-- Support Stats -->
                <div class="support-stats">
                    <div class="support-stat">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support Available</div>
                    </div>
                    <div class="support-stat">
                        <div class="stat-number">< 2min</div>
                        <div class="stat-label">Response Time</div>
                    </div>
                    <div class="support-stat">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
                
                <div class="support-options">
                    <a href="contact.php" class="support-btn">
                        <i class="fas fa-envelope"></i>
                        <span>Contact Us</span>
                    </a>
                    <a href="tel:+1-800-123-4567" class="support-btn">
                        <i class="fas fa-phone"></i>
                        <span>Call Us</span>
                    </a>
                    <a href="#" class="support-btn" id="live-chat-btn">
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

        // FAQ Accordion with enhanced functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const answer = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Close other open FAQs
                document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                    if (activeItem !== faqItem) {
                        activeItem.classList.remove('active');
                        const activeAnswer = activeItem.querySelector('.faq-answer');
                        const activeIcon = activeItem.querySelector('.faq-question i');
                        activeAnswer.style.maxHeight = '0';
                        activeIcon.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current FAQ
                faqItem.classList.toggle('active');
                
                // Toggle answer visibility with smooth animation
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    answer.style.maxHeight = '0';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Process Steps Interaction
        document.querySelectorAll('.process-step').forEach(step => {
            step.addEventListener('mouseenter', function() {
                const stepNumber = this.getAttribute('data-step');
                updateProgress(stepNumber);
            });
        });

        // Progress Indicator Function
        function updateProgress(stepNumber) {
            const progressFill = document.querySelector('.progress-fill');
            const progressSteps = document.querySelectorAll('.progress-step');
            
            // Update progress bar
            const progressPercentage = (stepNumber / 5) * 100;
            progressFill.style.width = progressPercentage + '%';
            
            // Update step markers
            progressSteps.forEach((step, index) => {
                if (index + 1 <= stepNumber) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        // Initialize progress at step 1
        updateProgress(1);

        // Initialize particles effect
        function createReturnParticles() {
            const particlesContainer = document.querySelector('.return-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 25; i++) {
                const particle = document.createElement('div');
                particle.className = 'return-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Live Chat Button
        document.getElementById('live-chat-btn').addEventListener('click', function(e) {
            e.preventDefault();
            // Simulate live chat opening
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i><span>Connecting...</span>';
            setTimeout(() => {
                this.innerHTML = '<i class=\"fas fa-comments\"></i><span>Live Chat</span>';
                alert('Live chat feature coming soon! Please use our contact form or call us for immediate assistance.');
            }, 2000);
        });

        // Smooth scroll for anchor links
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

        // Call particles function when page loads
        window.addEventListener('load', createReturnParticles);

        // Add scroll-based animations
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.return-hero-section');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = 'translateY(' + speed + 'px)';
            }
        });
    ";
    
    // Include footer
    include 'footer.php';
?> 