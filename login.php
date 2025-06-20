<?php
    session_start();

    $status = $_GET['status'] ?? '';

    // Page-specific variables
    $page_title = "Login & Register";
    $page_description = "Sign in to your Different Wear account or create a new one. Access your personalized shopping experience.";
    $page_keywords = "login, register, sign in, create account, different wear, fashion store";
    
    // Include header
    include 'header.php';
?>

    <!-- Login/Register Hero Section -->
    <section class="auth-hero-section">
        <div class="auth-background">
            <div class="auth-particles"></div>
            <div class="auth-shapes">
                <div class="auth-shape auth-shape-1"></div>
                <div class="auth-shape auth-shape-2"></div>
                <div class="auth-shape auth-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="auth-content">
                <div class="auth-text" data-aos="fade-right">
                    <div class="auth-badge" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-user-circle"></i>
                        <span>Welcome Back</span>
                    </div>
                    <h1 class="auth-title">
                        Join the <span class="highlight">Different Wear</span> Community
                    </h1>
                    <p class="auth-subtitle">
                        Sign in to access your personalized shopping experience, track orders, and enjoy exclusive member benefits.
                    </p>
                    <div class="auth-features">
                        <div class="auth-feature" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-shopping-bag"></i>
                            <span>Track Orders</span>
                        </div>
                        <div class="auth-feature" data-aos="fade-up" data-aos-delay="400">
                            <i class="fas fa-heart"></i>
                            <span>Wishlist</span>
                        </div>
                        <div class="auth-feature" data-aos="fade-up" data-aos-delay="500">
                            <i class="fas fa-percent"></i>
                            <span>Exclusive Offers</span>
                        </div>
                    </div>
                </div>
                
                <div class="auth-forms" data-aos="fade-left">
                    <div class="auth-tabs">
                        <button class="auth-tab active" data-tab="login">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Sign In</span>
                        </button>
                        <button class="auth-tab" data-tab="register">
                            <i class="fas fa-user-plus"></i>
                            <span>Create Account</span>
                        </button>
                    </div>
                    
                    <!-- Login Form -->
                    <div class="auth-form-container active" id="login-form">
                        <div class="form-header">
                            <h2>Welcome Back</h2>
                            <p>Sign in to your account to continue shopping</p>
                        </div>
                        
                        <form action="loginHandler.php" method="post" class="auth-form" id="loginForm">
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <label>Email Address</label>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <label>Password</label>
                                    <button type="button" class="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="form-options">
                                <label class="checkbox-wrapper">
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                    Remember me
                                </label>
                                <a href="#" class="forgot-password">Forgot Password?</a>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-auth">
                                <span class="btn-text">Sign In</span>
                                <i class="fas fa-arrow-right btn-icon"></i>
                                <div class="btn-loading">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </button>
                        </form>
                        
                        <div class="social-login">
                            <div class="divider">
                                <span>Or continue with</span>
                            </div>
                            <div class="social-buttons">
                                <button class="social-btn google-btn">
                                    <i class="fab fa-google"></i>
                                    <span>Google</span>
                                </button>
                                <button class="social-btn facebook-btn">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Register Form -->
                    <div class="auth-form-container" id="register-form">
                        <div class="form-header">
                            <h2>Create Account</h2>
                            <p>Join our community and start your fashion journey</p>
                        </div>
                        
                        <form action="registerHandler.php" method="post" class="auth-form" id="registerForm">
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="fullname" placeholder="Full Name" required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <label>Email Address</label>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <label>Password</label>
                                    <button type="button" class="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <div class="input-wrapper">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" name="number" placeholder="Phone Number" required>
                                    <label>Phone Number</label>
                                </div>
                            </div>
                            
                            <div class="form-options">
                                <label class="checkbox-wrapper">
                                    <input type="checkbox" name="terms" required>
                                    <span class="checkmark"></span>
                                    I agree to the <a href="#" class="terms-link">Terms & Conditions</a>
                                </label>
                                <label class="checkbox-wrapper">
                                    <input type="checkbox" name="newsletter">
                                    <span class="checkmark"></span>
                                    Subscribe to newsletter
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-auth">
                                <span class="btn-text">Create Account</span>
                                <i class="fas fa-arrow-right btn-icon"></i>
                                <div class="btn-loading">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </button>
                        </form>
                        
                        <div class="social-login">
                            <div class="divider">
                                <span>Or sign up with</span>
                            </div>
                            <div class="social-buttons">
                                <button class="social-btn google-btn">
                                    <i class="fab fa-google"></i>
                                    <span>Google</span>
                                </button>
                                <button class="social-btn facebook-btn">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="auth-benefits-section">
        <div class="container">
            <div class="benefits-grid">
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p>Free shipping on orders over $50 for all members</p>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-icon">
                        <i class="fas fa-percent"></i>
                    </div>
                    <h3>Member Discounts</h3>
                    <p>Exclusive discounts and early access to sales</p>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>30-day return policy with hassle-free process</p>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round the clock customer support for members</p>
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

        // Status Messages
        const status = '" . $status . "';
        if (status === 'success') {
            showNotification('Successfully registered! Please login to continue.', 'success');
        } else if (status === 'register-fail') {
            showNotification('Failed to register your account. Please try again.', 'error');
        } else if (status === 'login-fail') {
            showNotification('Username or Password is wrong. Please try again.', 'error');
        } else if (status === 'exists') {
            showNotification('Email is already registered. Try different email or login to your account.', 'error');
        }

        // Tab Switching
        const authTabs = document.querySelectorAll('.auth-tab');
        const authForms = document.querySelectorAll('.auth-form-container');

        authTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetForm = tab.getAttribute('data-tab');
                
                // Update active tab
                authTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                
                // Update active form
                authForms.forEach(form => {
                    form.classList.remove('active');
                    if (form.id === targetForm + '-form') {
                        form.classList.add('active');
                    }
                });
            });
        });

        // Form Enhancement
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        // Login Form Handler
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-auth');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnIcon = submitBtn.querySelector('.btn-icon');
            const btnLoading = submitBtn.querySelector('.btn-loading');
            
            // Show loading state
            submitBtn.classList.add('loading');
            btnText.style.opacity = '0';
            btnIcon.style.opacity = '0';
            btnLoading.style.opacity = '1';
            
            // Simulate form submission
            setTimeout(() => {
                this.submit();
            }, 1500);
        });

        // Register Form Handler
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-auth');
            const btnText = submitBtn.querySelector('.btn-text');
            const btnIcon = submitBtn.querySelector('.btn-icon');
            const btnLoading = submitBtn.querySelector('.btn-loading');
            
            // Show loading state
            submitBtn.classList.add('loading');
            btnText.style.opacity = '0';
            btnIcon.style.opacity = '0';
            btnLoading.style.opacity = '1';
            
            // Simulate form submission
            setTimeout(() => {
                this.submit();
            }, 1500);
        });

        // Floating Label Animation
        document.querySelectorAll('.input-wrapper input').forEach(input => {
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

        // Password Toggle
        document.querySelectorAll('.password-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        });

        // Social Login Buttons
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                showNotification('Social login coming soon!', 'info');
            });
        });

        // Forgot Password
        document.querySelector('.forgot-password').addEventListener('click', function(e) {
            e.preventDefault();
            showNotification('Password reset feature coming soon!', 'info');
        });

        // Terms Link
        document.querySelectorAll('.terms-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                showNotification('Terms & Conditions page coming soon!', 'info');
            });
        });

        // Benefit Cards Hover Effect
        document.querySelectorAll('.benefit-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Initialize particles effect
        function createAuthParticles() {
            const particlesContainer = document.querySelector('.auth-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'auth-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 8 + 8) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createAuthParticles);

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

        // Before submitting login, save localStorage cart to sessionStorage
        function saveCartToSession() {
            var cart = localStorage.getItem('cart');
            if (cart) {
                sessionStorage.setItem('cartToSync', cart);
            }
        }
        // Attach to login form
        const loginForm = document.querySelector('form');
        if (loginForm) {
            loginForm.addEventListener('submit', saveCartToSession);
        }
    ";
    
    // Include footer
    include 'footer.php';
?>

<script>
// Before submitting login, save localStorage cart to sessionStorage
function saveCartToSession() {
    var cart = localStorage.getItem('cart');
    if (cart) {
        sessionStorage.setItem('cartToSync', cart);
    }
}
// Attach to login form
const loginForm = document.querySelector('form');
if (loginForm) {
    loginForm.addEventListener('submit', saveCartToSession);
}
</script>