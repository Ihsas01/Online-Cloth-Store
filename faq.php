<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Frequently Asked Questions";
    $page_description = "Find answers to common questions about Different Wear. Everything you need to know about orders, shipping, returns, and more.";
    $page_keywords = "FAQ, frequently asked questions, help, support, different wear customer service";
    
    // Include header
    include 'header.php';
?>

    <!-- FAQ Hero Section -->
    <section class="faq-hero-section">
        <div class="faq-background">
            <div class="faq-particles"></div>
            <div class="faq-shapes">
                <div class="faq-shape faq-shape-1"></div>
                <div class="faq-shape faq-shape-2"></div>
                <div class="faq-shape faq-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="faq-hero-content" data-aos="fade-up">
                <div class="faq-badge">
                    <i class="fas fa-question-circle"></i>
                    <span>FAQ</span>
                </div>
                <h1 class="faq-hero-title">
                    <span class="highlight">Frequently Asked</span> Questions
                </h1>
                <p class="faq-hero-subtitle">
                    Find answers to common questions about Different Wear
                </p>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="faq-search-section">
        <div class="container">
            <div class="search-container" data-aos="fade-up">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="faq-search" placeholder="Search for questions or topics...">
                    <button class="search-btn">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <div class="search-suggestions">
                    <span>Popular searches:</span>
                    <a href="#shipping" class="suggestion-tag">shipping</a>
                    <a href="#returns" class="suggestion-tag">returns</a>
                    <a href="#sizing" class="suggestion-tag">sizing</a>
                    <a href="#payment" class="suggestion-tag">payment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories Section -->
    <section class="faq-categories-section">
        <div class="container">
            <div class="categories-grid">
                <div class="category-card" data-category="orders" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Orders & Shopping</h3>
                    <p>Questions about placing orders, order status, and shopping experience</p>
                    <span class="question-count">8 questions</span>
                </div>
                
                <div class="category-card" data-category="shipping" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Shipping & Delivery</h3>
                    <p>Information about shipping options, delivery times, and tracking</p>
                    <span class="question-count">6 questions</span>
                </div>
                
                <div class="category-card" data-category="returns" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Returns & Exchanges</h3>
                    <p>How to return items, exchange policies, and refund information</p>
                    <span class="question-count">7 questions</span>
                </div>
                
                <div class="category-card" data-category="sizing" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3>Sizing & Fit</h3>
                    <p>Size charts, measurement guides, and fitting advice</p>
                    <span class="question-count">5 questions</span>
                </div>
                
                <div class="category-card" data-category="payment" data-aos="fade-up" data-aos-delay="500">
                    <div class="category-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Payment & Billing</h3>
                    <p>Payment methods, billing questions, and security</p>
                    <span class="question-count">4 questions</span>
                </div>
                
                <div class="category-card" data-category="account" data-aos="fade-up" data-aos-delay="600">
                    <div class="category-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Account & Profile</h3>
                    <p>Account management, profile settings, and preferences</p>
                    <span class="question-count">6 questions</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Content Section -->
    <section class="faq-content-section">
        <div class="container">
            <!-- Orders & Shopping FAQ -->
            <div class="faq-category" id="orders" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-shopping-cart"></i> Orders & Shopping</h2>
                    <p>Everything you need to know about placing and managing your orders</p>
                </div>
                
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I place an order?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>To place an order, simply browse our products, add items to your cart, and proceed to checkout. You'll need to create an account or sign in, provide your shipping and billing information, and complete your payment.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I modify or cancel my order?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can modify or cancel your order within 1 hour of placing it by contacting our customer service team. After that time, your order will be processed and cannot be changed.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I track my order?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Once your order ships, you'll receive a tracking number via email. You can also track your order by logging into your account and visiting the order history section.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What payment methods do you accept?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We accept all major credit cards (Visa, MasterCard, American Express, Discover), PayPal, Apple Pay, Google Pay, and gift cards.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is my payment information secure?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we use industry-standard SSL encryption to protect your payment information. We never store your credit card details on our servers.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer gift wrapping?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer gift wrapping for an additional $5.99 per item. You can select this option during checkout.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I save items for later?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can add items to your wishlist by clicking the heart icon on any product. You can access your wishlist from your account dashboard.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer bulk discounts?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer bulk discounts for orders of 10 or more items. Contact our customer service team for more information.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipping & Delivery FAQ -->
            <div class="faq-category" id="shipping" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-shipping-fast"></i> Shipping & Delivery</h2>
                    <p>Information about shipping options, delivery times, and tracking</p>
                </div>
                
                <div class="faq-list">
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
                            <h3>Do you ship internationally?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we ship to over 50 countries worldwide. International shipping costs and delivery times vary by location.</p>
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
                </div>
            </div>

            <!-- Returns & Exchanges FAQ -->
            <div class="faq-category" id="returns" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-undo"></i> Returns & Exchanges</h2>
                    <p>How to return items, exchange policies, and refund information</p>
                </div>
                
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long do I have to return an item?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You have 30 days from the date of delivery to return your item. The return window starts the day your order is delivered to your shipping address.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do I have to pay for return shipping?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>No, we provide free return shipping for all orders within the United States. International customers are responsible for return shipping costs.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long does it take to get my refund?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Once we receive your return, we process refunds within 3-5 business days. The time it takes for the refund to appear in your account depends on your bank or credit card company.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I exchange an item for a different size?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can exchange items for different sizes or colors at no additional cost. Simply select the exchange option when initiating your return.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What if my item arrives damaged?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>If your item arrives damaged, please contact our customer service team immediately. We'll arrange for a replacement or refund at no cost to you.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I return items purchased with a gift card?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, items purchased with a gift card can be returned. The refund will be issued as store credit to your account.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What items cannot be returned?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Underwear, swimwear, personalized items, and items marked as final sale cannot be returned for hygiene and policy reasons.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sizing & Fit FAQ -->
            <div class="faq-category" id="sizing" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-ruler"></i> Sizing & Fit</h2>
                    <p>Size charts, measurement guides, and fitting advice</p>
                </div>
                
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I find my correct size?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Use our size guide to measure yourself and find your perfect fit. You can also use our quick size finder tool for instant recommendations.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do your sizes run true to size?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Our sizes generally run true to size, but we recommend checking the size chart for each item as fit can vary by style and fabric.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What if the item doesn't fit?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>If an item doesn't fit, you can return it within 30 days for a full refund or exchange it for a different size at no additional cost.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer plus sizes?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer a range of plus sizes in many of our styles. Look for the plus size filter when browsing our products.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I measure myself?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Use a flexible measuring tape and follow our measurement guide. Measure your chest, waist, hips, and inseam for the most accurate sizing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment & Billing FAQ -->
            <div class="faq-category" id="payment" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-credit-card"></i> Payment & Billing</h2>
                    <p>Payment methods, billing questions, and security</p>
                </div>
                
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What payment methods do you accept?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We accept all major credit cards (Visa, MasterCard, American Express, Discover), PayPal, Apple Pay, Google Pay, and gift cards.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Is my payment information secure?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we use industry-standard SSL encryption to protect your payment information. We never store your credit card details on our servers.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer payment plans?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer payment plans through Klarna and Afterpay for orders over $35. You can split your purchase into 4 interest-free payments.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I use multiple payment methods?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Currently, we only accept one payment method per order. However, you can use gift cards in combination with other payment methods.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account & Profile FAQ -->
            <div class="faq-category" id="account" data-aos="fade-up">
                <div class="category-header">
                    <h2><i class="fas fa-user"></i> Account & Profile</h2>
                    <p>Account management, profile settings, and preferences</p>
                </div>
                
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I create an account?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>You can create an account by clicking the \"Sign Up\" button in the top navigation. You'll need to provide your email address and create a password.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I reset my password?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Click the \"Forgot Password\" link on the login page. Enter your email address and we'll send you a link to reset your password.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I update my profile information?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Log into your account and go to the \"Profile\" section. You can update your personal information, shipping addresses, and preferences there.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I delete my account?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, you can delete your account by contacting our customer service team. Please note that this action cannot be undone.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I manage my email preferences?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Go to your account settings and click on \"Email Preferences\" to manage which emails you receive from us.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I view my order history?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Log into your account and go to the \"Orders\" section. You'll see all your past orders with their status and tracking information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="faq-support-section">
        <div class="container">
            <div class="support-content" data-aos="fade-up">
                <div class="support-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h2>Still Need Help?</h2>
                <p>Can't find the answer you're looking for? Our customer service team is here to help</p>
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

        // FAQ Search functionality
        document.getElementById('faq-search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    item.style.opacity = '1';
                } else {
                    item.style.opacity = '0.3';
                }
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const answer = this.nextElementSibling;
                const icon = this.querySelector('i');
                
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

        // Category cards click functionality
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                const targetSection = document.getElementById(category);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Suggestion tags click functionality
        document.querySelectorAll('.suggestion-tag').forEach(tag => {
            tag.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize particles effect
        function createFaqParticles() {
            const particlesContainer = document.querySelector('.faq-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'faq-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createFaqParticles);
    ";
    
    // Include footer
    include 'footer.php';
?> 