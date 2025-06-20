    </main>
    <!-- Page Content Ends Here -->

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter for exclusive offers and fashion tips</p>
                <form class="newsletter-form" id="newsletter-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section" data-aos="fade-up" data-aos-delay="100">
                    <h3>Download Our App</h3>
                    <p>Get the best shopping experience on your mobile device</p>
                    <div class="app-links">
                        <a href="#" class="app-link">
                            <i class="fab fa-apple"></i>
                            <span>App Store</span>
                        </a>
                        <a href="#" class="app-link">
                            <i class="fab fa-google-play"></i>
                            <span>Google Play</span>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section" data-aos="fade-up" data-aos-delay="200">
                    <div class="footer-logo">
                        <img src="images/Different_Wear.png" alt="Different Wear" width="100">
                    </div>
                    <p>Our Purpose Is Giving Best ONES</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section" data-aos="fade-up" data-aos-delay="300">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="coupons.php">Coupons</a></li>
                        <li><a href="blog.php">Blog Post</a></li>
                        <li><a href="return-policy.php">Return Policy</a></li>
                    </ul>
                </div>
                
                <div class="footer-section" data-aos="fade-up" data-aos-delay="400">
                    <h3>Customer Service</h3>
                    <ul class="footer-links">
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="shipping.php">Shipping Info</a></li>
                        <li><a href="size-guide.php">Size Guide</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Different Wear. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js"></script>
    
    <!-- Page-specific scripts -->
    <?php if (isset($page_scripts)): ?>
        <?php foreach ($page_scripts as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Inline scripts for specific pages -->
    <?php if (isset($inline_scripts)): ?>
        <script>
            <?php echo $inline_scripts; ?>
        </script>
    <?php endif; ?>

    <!-- Newsletter Form Handler -->
    <script>
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                // You can add AJAX call here to handle newsletter subscription
                showNotification('Thank you for subscribing!', 'success');
                this.reset();
            }
        });
    </script>

    <!-- Analytics and Tracking (if needed) -->
    <?php if (isset($analytics_code)): ?>
        <?php echo $analytics_code; ?>
    <?php endif; ?>

</body>
</html> 