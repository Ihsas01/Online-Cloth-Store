<?php
    // Page-specific variables
    $page_title = "Contact Us";
    $page_description = "Get in touch with Different Wear. We're here to help with any questions about our products, orders, or services.";
    $page_keywords = "contact, support, help, customer service, different-wear contact, fashion store contact";
    
    // Include header
    include 'header.php';
    
    $status = $_GET['status'] ?? '';

    if ($status === 'success') {
        echo "<script>alert('Successfully your message is sent');</script>";
    } elseif ($status === 'fail') {
        echo "<script>alert('Failed to send your message. Please try again.');</script>";
    } 
?>

    <!-- Page Header -->
    <section class="page-header" style="background: var(--gradient-primary); padding: 8rem 0 4rem; margin-top: 60px; text-align: center; color: var(--text-white);">
        <div class="container">
            <h1 data-aos="fade-up">Get In Touch</h1>
            <p data-aos="fade-up" data-aos-delay="100">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" style="padding: 6rem 0;">
        <div class="container">
            <div class="contact-layout">
                <!-- Contact Information -->
                <div class="contact-info" data-aos="fade-right">
                    <h2>Let's Start a Conversation</h2>
                    <p class="contact-subtitle">We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
                    
                    <div class="contact-methods">
                        <div class="contact-method" data-aos="fade-up" data-aos-delay="100">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-content">
                                <h3>Visit Us</h3>
                                <p>123 Main Street<br>Colombo <br>Srilanka</p>
                            </div>
                        </div>
                        
                        <div class="contact-method" data-aos="fade-up" data-aos-delay="200">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-content">
                                <h3>Call Us</h3>
                                <p>+94 763913526<br>Mon-Fri: 9AM-6PM </p>
                            </div>
                        </div>
                        
                        <div class="contact-method" data-aos="fade-up" data-aos-delay="300">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-content">
                                <h3>Email Us</h3>
                                <p>hello@different-wear.com<br>Mohamedihsas001@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-method" data-aos="fade-up" data-aos-delay="400">
                            <div class="method-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="method-content">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 9AM-6PM<br>Saturday: 10AM-4PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-contact" data-aos="fade-up" data-aos-delay="500">
                        <h3>Follow Us</h3>
                        <div class="social-links-contact">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form-container" data-aos="fade-left">
                    <div class="form-card">
                        <h2>Send us a Message</h2>
                        <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                        
                        <form action="contactHandler.php" method="post" class="contact-form" id="contact-form">
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <input type="text" id="fullname" name="fullname" required>
                                    <label for="fullname">Full Name</label>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <input type="email" id="email" name="email" required>
                                    <label for="email">Email Address</label>
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <input type="tel" id="phone" name="phone">
                                    <label for="phone">Phone Number (Optional)</label>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <select id="subject" name="subject" required>
                                        <option value="">Select Subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="order">Order Support</option>
                                        <option value="product">Product Information</option>
                                        <option value="return">Returns & Exchanges</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="subject">Subject</label>
                                    <i class="fas fa-tag"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                    <label for="message">Your Message</label>
                                    <i class="fas fa-comment"></i>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="checkbox-wrapper">
                                    <input type="checkbox" required>
                                    <span class="checkmark"></span>
                                    I agree to the <a href="#" class="link">Privacy Policy</a> and <a href="#" class="link">Terms of Service</a>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-large submit-btn">
                                <span class="btn-text">Send Message</span>
                                <span class="btn-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </span>
                                <div class="btn-loading">
                                    <div class="spinner"></div>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="padding: 4rem 0; background: var(--bg-light);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Find quick answers to common questions</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <h3>How can I track my order?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>You can track your order by logging into your account and visiting the "My Orders" section. You'll also receive email updates with tracking information.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <h3>What is your return policy?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We offer a 30-day return policy for all items in their original condition. Returns are free for orders over $50. Contact our support team to initiate a return.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <h3>Do you ship internationally?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by location. You can check shipping options during checkout.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">
                        <h3>How do I change or cancel my order?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Orders can be modified or cancelled within 2 hours of placement. Contact our customer service team immediately for assistance with order changes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" style="padding: 4rem 0;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Find Our Store</h2>
                <p class="section-subtitle">Visit us in person for a personalized shopping experience</p>
            </div>
            
            <div class="map-container" data-aos="zoom-in">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Interactive Map Coming Soon</h3>
                    <p>We're working on adding an interactive map to help you find our store location.</p>
                    <div class="map-info">
                        <div class="map-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Fashion Street, New York, NY 10001</span>
                        </div>
                        <div class="map-detail">
                            <i class="fas fa-clock"></i>
                            <span>Mon-Fri: 9AM-6PM | Sat: 10AM-4PM</span>
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

        // Contact Form Enhancement
        const contactForm = document.getElementById('contact-form');
        const submitBtn = document.querySelector('.submit-btn');
        const btnText = document.querySelector('.btn-text');
        const btnIcon = document.querySelector('.btn-icon');
        const btnLoading = document.querySelector('.btn-loading');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            submitBtn.classList.add('loading');
            btnText.style.opacity = '0';
            btnIcon.style.opacity = '0';
            btnLoading.style.opacity = '1';
            
            // Simulate form submission (replace with actual form submission)
            setTimeout(() => {
                // Reset form
                contactForm.reset();
                
                // Show success message
                showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
                
                // Reset button state
                submitBtn.classList.remove('loading');
                btnText.style.opacity = '1';
                btnIcon.style.opacity = '1';
                btnLoading.style.opacity = '0';
            }, 2000);
        });

        // Floating Label Animation
        document.querySelectorAll('.input-wrapper input, .input-wrapper textarea, .input-wrapper select').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
            
            // Check if input has value on page load
            if (input.value) {
                input.parentElement.classList.add('focused');
            }
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
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                        item.querySelector('i').classList.remove('fa-chevron-up');
                        item.querySelector('i').classList.add('fa-chevron-down');
                    }
                });
                
                // Toggle current FAQ item
                faqItem.classList.toggle('active');
                
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    answer.style.maxHeight = '0';
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });

        // Social Links Hover Effect
        document.querySelectorAll('.social-link').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.1)';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Contact Method Hover Effect
        document.querySelectorAll('.contact-method').forEach(method => {
            method.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
            });
            
            method.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.08)';
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
    ";
    
    // Include footer
    include 'footer.php';
?>