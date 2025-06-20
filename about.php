<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "About Us";
    $page_description = "Learn about Different Wear - our story, mission, values, and commitment to providing premium fashion experiences.";
    $page_keywords = "about us, different wear, fashion brand, company story, mission, values";
    
    // Include header
    include 'header.php';
?>

    <!-- About Hero Section -->
    <section class="about-hero-section">
        <div class="about-background">
            <div class="about-particles"></div>
            <div class="about-shapes">
                <div class="about-shape about-shape-1"></div>
                <div class="about-shape about-shape-2"></div>
                <div class="about-shape about-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="about-hero-content" data-aos="fade-up">
                <div class="about-badge">
                    <i class="fas fa-star"></i>
                    <span>Our Story</span>
                </div>
                <h1 class="about-hero-title">
                    About <span class="highlight">Different Wear</span>
                </h1>
                <p class="about-hero-subtitle">
                    Crafting unique fashion experiences since 2020
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="story-layout">
                <div class="story-content" data-aos="fade-right">
                    <div class="section-header">
                        <h2>Our Story</h2>
                        <p>How it all began</p>
                    </div>
                    <div class="story-text">
                        <p>Different Wear was born from a simple yet powerful idea: fashion should be accessible, sustainable, and uniquely personal. Founded in 2020, we started as a small team of fashion enthusiasts who believed that everyone deserves to express their individuality through clothing.</p>
                        
                        <p>What began as a local boutique has grown into a beloved fashion destination, serving customers worldwide. Our journey has been marked by innovation, creativity, and an unwavering commitment to quality and customer satisfaction.</p>
                        
                        <p>Today, we continue to push boundaries in fashion, embracing new technologies while staying true to our core values of authenticity, sustainability, and inclusivity.</p>
                    </div>
                    
                    <div class="story-stats">
                        <div class="story-stat">
                            <span class="stat-number">50K+</span>
                            <span class="stat-label">Happy Customers</span>
                        </div>
                        <div class="story-stat">
                            <span class="stat-number">1000+</span>
                            <span class="stat-label">Products</span>
                        </div>
                        <div class="story-stat">
                            <span class="stat-number">25+</span>
                            <span class="stat-label">Countries</span>
                        </div>
                    </div>
                </div>
                
                <div class="story-image" data-aos="fade-left">
                    <img src="images/Different_Wear.png" alt="Different Wear Store" class="main-image">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-store"></i>
                            <h3>Our First Store</h3>
                            <p>Where it all began</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="mission-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Our Mission & Values</h2>
                <p>What drives us forward</p>
            </div>
            
            <div class="mission-grid">
                <div class="mission-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To empower individuals to express their unique style through high-quality, sustainable fashion that makes them feel confident and beautiful.</p>
                </div>
                
                <div class="mission-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="mission-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To become the leading destination for conscious fashion, where style meets sustainability and every customer feels valued and inspired.</p>
                </div>
                
                <div class="mission-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="mission-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>Authenticity, sustainability, inclusivity, innovation, and customer-centricity guide everything we do.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Core Values</h2>
                <p>The principles that guide us</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainability</h3>
                    <p>We're committed to eco-friendly practices and sustainable fashion choices that protect our planet.</p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Inclusivity</h3>
                    <p>Fashion is for everyone. We celebrate diversity and create clothing that fits all body types and styles.</p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We never compromise on quality. Every piece is crafted with attention to detail and premium materials.</p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We constantly push boundaries, embracing new technologies and creative approaches to fashion.</p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We conduct business with honesty, transparency, and respect for our customers, partners, and community.</p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We strive for excellence in everything we do, from product design to customer service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Meet Our Team</h2>
                <p>The passionate people behind Different Wear</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-image">
                        <!-- Image removed -->
                    </div>
                    <div class="member-info">
                        <h3>Sarah Johnson</h3>
                        <span class="member-role">CEO & Founder</span>
                        <p>Visionary leader with 15+ years in fashion industry</p>
                    </div>
                </div>
                
                <div class="team-member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-image">
                        <!-- Image removed -->
                    </div>
                    <div class="member-info">
                        <h3>Michael Chen</h3>
                        <span class="member-role">Head Designer</span>
                        <p>Creative genius behind our signature collections</p>
                    </div>
                </div>
                
                <div class="team-member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-image">
                        <!-- Image removed -->
                    </div>
                    <div class="member-info">
                        <h3>Emily Rodriguez</h3>
                        <span class="member-role">Marketing Director</span>
                        <p>Building our brand presence worldwide</p>
                    </div>
                </div>
                
                <div class="team-member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-image">
                        <!-- Image removed -->
                    </div>
                    <div class="member-info">
                        <h3>David Kim</h3>
                        <span class="member-role">Operations Manager</span>
                        <p>Ensuring smooth operations and customer satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Our Journey</h2>
                <p>Key milestones in our story</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-marker">2020</div>
                    <div class="timeline-content">
                        <h3>Founded</h3>
                        <p>Different Wear was established with a vision to revolutionize fashion retail</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-marker">2021</div>
                    <div class="timeline-content">
                        <h3>First Store</h3>
                        <p>Opened our flagship store and launched our first collection</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-marker">2022</div>
                    <div class="timeline-content">
                        <h3>Online Launch</h3>
                        <p>Launched our e-commerce platform to reach customers worldwide</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-marker">2023</div>
                    <div class="timeline-content">
                        <h3>Expansion</h3>
                        <p>Expanded to 25+ countries and reached 50,000+ customers</p>
                    </div>
                </div>
                
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="timeline-marker">2024</div>
                    <div class="timeline-content">
                        <h3>Innovation</h3>
                        <p>Launched sustainable fashion initiatives and AI-powered recommendations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Join Our Fashion Journey</h2>
                <p>Be part of our story and discover your unique style with Different Wear</p>
                <div class="cta-buttons">
                    <a href="products.php" class="btn btn-primary">
                        <i class="fas fa-shopping-bag"></i>
                        <span>Shop Now</span>
                    </a>
                    <a href="contact.php" class="btn btn-outline">
                        <i class="fas fa-envelope"></i>
                        <span>Contact Us</span>
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

        // Initialize particles effect
        function createAboutParticles() {
            const particlesContainer = document.querySelector('.about-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'about-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Call particles function when page loads
        window.addEventListener('load', createAboutParticles);
    ";
    
    // Include footer
    include 'footer.php';
?> 