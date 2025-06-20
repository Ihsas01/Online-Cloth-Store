<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Fashion Blog";
    $page_description = "Discover the latest fashion trends, styling tips, and fashion news from Different Wear. Stay updated with the world of fashion.";
    $page_keywords = "fashion blog, style tips, fashion trends, fashion news, different wear blog";
    
    // Include header
    include 'header.php';
?>

    <!-- Blog Hero Section -->
    <section class="blog-hero-section">
        <div class="blog-background">
            <div class="blog-particles"></div>
            <div class="blog-shapes">
                <div class="blog-shape blog-shape-1"></div>
                <div class="blog-shape blog-shape-2"></div>
                <div class="blog-shape blog-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="blog-hero-content" data-aos="fade-up">
                <div class="blog-badge">
                    <i class="fas fa-pen-fancy"></i>
                    <span>Fashion Blog</span>
                </div>
                <h1 class="blog-hero-title">
                    <span class="highlight">Fashion</span> & Style Blog
                </h1>
                <p class="blog-hero-subtitle">
                    Discover trends, tips, and inspiration for your unique style
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="featured-posts-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Featured Articles</h2>
                <p>Must-read fashion content curated for you</p>
            </div>
            
            <div class="featured-posts-grid">
                <article class="featured-post main-post" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-image">
                        <div class="blog-avatar-fallback trends">
                            <span>FT</span>
                        </div>
                        <div class="post-category">Trends</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Dec 15, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Sarah Johnson</span>
                        </div>
                        <h2>Top Fashion Trends to Watch in 2024</h2>
                        <p>Discover the hottest fashion trends that will dominate the style scene in 2024. From sustainable fashion to bold colors, we've got you covered with everything you need to know.</p>
                        <a href="#" class="read-more-btn">
                            <span>Read More</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
                
                <div class="featured-posts-sidebar">
                    <article class="featured-post side-post" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-image">
                            <div class="blog-avatar-fallback sustainability">
                                <span>SF</span>
                            </div>
                            <div class="post-category">Sustainability</div>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-date"><i class="fas fa-calendar"></i> Dec 12, 2024</span>
                            </div>
                            <h3>Sustainable Fashion: A Complete Guide</h3>
                            <p>Learn how to build a sustainable wardrobe and make eco-friendly fashion choices.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </article>
                    
                    <article class="featured-post side-post" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-image">
                            <div class="blog-avatar-fallback style-tips">
                                <span>ST</span>
                            </div>
                            <div class="post-category">Style Tips</div>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-date"><i class="fas fa-calendar"></i> Dec 10, 2024</span>
                            </div>
                            <h3>10 Style Tips for Every Body Type</h3>
                            <p>Discover how to dress for your body type and feel confident in your own skin.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Categories Section -->
    <section class="blog-categories-section">
        <div class="container">
            <div class="categories-filter" data-aos="fade-up">
                <button class="category-btn active" data-category="all">All Posts</button>
                <button class="category-btn" data-category="trends">Trends</button>
                <button class="category-btn" data-category="style-tips">Style Tips</button>
                <button class="category-btn" data-category="sustainability">Sustainability</button>
                <button class="category-btn" data-category="news">Fashion News</button>
                <button class="category-btn" data-category="lifestyle">Lifestyle</button>
            </div>
        </div>
    </section>

    <!-- All Posts Section -->
    <section class="all-posts-section">
        <div class="container">
            <div class="posts-grid">
                <article class="blog-post" data-category="trends" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-image">
                        <div class="blog-avatar-fallback trends">
                            <span>WF</span>
                        </div>
                        <div class="post-category">Trends</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Dec 8, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Michael Chen</span>
                        </div>
                        <h3>Winter Fashion Essentials for 2024</h3>
                        <p>Stay warm and stylish this winter with our curated selection of must-have winter fashion essentials.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
                
                <article class="blog-post" data-category="style-tips" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-image">
                        <div class="blog-avatar-fallback style-tips">
                            <span>CC</span>
                        </div>
                        <div class="post-category">Style Tips</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Dec 5, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Emily Rodriguez</span>
                        </div>
                        <h3>Mastering Color Coordination</h3>
                        <p>Learn the art of color coordination and create stunning outfits that turn heads wherever you go.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
                
                <article class="blog-post" data-category="sustainability" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-image">
                        <div class="blog-avatar-fallback sustainability">
                            <span>EF</span>
                        </div>
                        <div class="post-category">Sustainability</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Dec 3, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> David Kim</span>
                        </div>
                        <h3>Eco-Friendly Materials in Fashion</h3>
                        <p>Explore the latest eco-friendly materials that are revolutionizing the fashion industry.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
                
                <article class="blog-post" data-category="news" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-image">
                        <div class="blog-avatar-fallback news">
                            <span>FW</span>
                        </div>
                        <div class="post-category">Fashion News</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Dec 1, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Sarah Johnson</span>
                        </div>
                        <h3>Highlights from Paris Fashion Week</h3>
                        <p>Get the inside scoop on the most memorable moments and trends from Paris Fashion Week.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
                
                <article class="blog-post" data-category="lifestyle" data-aos="fade-up" data-aos-delay="500">
                    <div class="post-image">
                        <div class="blog-avatar-fallback lifestyle">
                            <span>CW</span>
                        </div>
                        <div class="post-category">Lifestyle</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Nov 28, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Emily Rodriguez</span>
                        </div>
                        <h3>Building a Capsule Wardrobe</h3>
                        <p>Learn how to create a versatile capsule wardrobe that simplifies your daily dressing routine.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
                
                <article class="blog-post" data-category="style-tips" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-image">
                        <div class="blog-avatar-fallback style-tips">
                            <span>AG</span>
                        </div>
                        <div class="post-category">Style Tips</div>
                    </div>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-date"><i class="fas fa-calendar"></i> Nov 25, 2024</span>
                            <span class="post-author"><i class="fas fa-user"></i> Michael Chen</span>
                        </div>
                        <h3>Accessorizing Like a Pro</h3>
                        <p>Master the art of accessorizing and elevate your outfits with the perfect finishing touches.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                    </div>
                </article>
            </div>
            
            <!-- Load More Button -->
            <div class="load-more-section" data-aos="fade-up">
                <button class="load-more-btn">
                    <i class="fas fa-plus"></i>
                    <span>Load More Posts</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="blog-newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <div class="newsletter-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h2>Stay Updated with Fashion</h2>
                <p>Subscribe to our newsletter and get the latest fashion trends, style tips, and exclusive content delivered to your inbox</p>
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
                    <span><i class="fas fa-check"></i> Weekly fashion updates</span>
                    <span><i class="fas fa-check"></i> Exclusive style tips</span>
                    <span><i class="fas fa-check"></i> Early access to sales</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Tags Section -->
    <section class="popular-tags-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Popular Tags</h2>
                <p>Explore topics that interest you</p>
            </div>
            
            <div class="tags-cloud" data-aos="fade-up">
                <a href="#" class="tag">Fashion Trends</a>
                <a href="#" class="tag">Style Tips</a>
                <a href="#" class="tag">Sustainable Fashion</a>
                <a href="#" class="tag">Winter Style</a>
                <a href="#" class="tag">Accessories</a>
                <a href="#" class="tag">Color Coordination</a>
                <a href="#" class="tag">Capsule Wardrobe</a>
                <a href="#" class="tag">Fashion News</a>
                <a href="#" class="tag">Body Positivity</a>
                <a href="#" class="tag">Eco-Friendly</a>
                <a href="#" class="tag">Seasonal Fashion</a>
                <a href="#" class="tag">Fashion Week</a>
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

        // Filter blog posts by category
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active category
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filter posts
                document.querySelectorAll('.blog-post').forEach(post => {
                    if (category === 'all' || post.getAttribute('data-category') === category) {
                        post.style.display = 'block';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });

        // Load more posts functionality
        document.querySelector('.load-more-btn').addEventListener('click', function() {
            const btn = this;
            const originalText = btn.innerHTML;
            
            // Show loading state
            btn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i><span>Loading...</span>';
            btn.disabled = true;
            
            // Simulate loading more posts
            setTimeout(() => {
                // Add new posts (in a real app, this would fetch from server)
                const postsGrid = document.querySelector('.posts-grid');
                const newPost = document.createElement('article');
                newPost.className = 'blog-post';
                newPost.setAttribute('data-category', 'trends');
                newPost.setAttribute('data-aos', 'fade-up');
                
                newPost.innerHTML = `
                    <div class=\"post-image\">
                        <div class=\"blog-avatar-fallback trends\">
                            <span>NP</span>
                        </div>
                        <div class=\"post-category\">Trends</div>
                    </div>
                    <div class=\"post-content\">
                        <div class=\"post-meta\">
                            <span class=\"post-date\"><i class=\"fas fa-calendar\"></i> Dec 20, 2024</span>
                            <span class=\"post-author\"><i class=\"fas fa-user\"></i> Fashion Editor</span>
                        </div>
                        <h3>New Fashion Discovery</h3>
                        <p>Latest fashion insights and discoveries that will inspire your style journey.</p>
                        <a href=\"#\" class=\"read-more-btn\">Read More</a>
                    </div>
                `;
                
                postsGrid.appendChild(newPost);
                
                // Reset button
                btn.innerHTML = originalText;
                btn.disabled = false;
                
                // Reinitialize AOS for new elements
                AOS.refresh();
                
                showNotification('New posts loaded successfully!', 'success');
            }, 2000);
        });

        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type=\"email\"]').value;
            
            // Simulate subscription
            showNotification('Thank you for subscribing to our fashion newsletter!', 'success');
            this.reset();
        });

        // Initialize particles effect
        function createBlogParticles() {
            const particlesContainer = document.querySelector('.blog-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'blog-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createBlogParticles);

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