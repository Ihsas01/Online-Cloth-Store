<?php
    session_start();
    require 'db_connection.php';

    // Page-specific variables
    $page_title = "Size Guide";
    $page_description = "Find your perfect fit with Different Wear's comprehensive size guide. Measurement charts, fitting tips, and size conversion tables for men and women.";
    $page_keywords = "size guide, measurements, fitting, size chart, different wear sizing, clothing sizes";
    
    // Include header
    include 'header.php';
?>

    <!-- Size Guide Hero Section -->
    <section class="size-guide-hero-section">
        <div class="size-guide-background">
            <div class="size-guide-particles"></div>
            <div class="size-guide-shapes">
                <div class="size-guide-shape size-guide-shape-1"></div>
                <div class="size-guide-shape size-guide-shape-2"></div>
                <div class="size-guide-shape size-guide-shape-3"></div>
            </div>
        </div>
        
        <div class="container">
            <div class="size-guide-hero-content" data-aos="fade-up">
                <div class="size-guide-badge">
                    <i class="fas fa-ruler"></i>
                    <span>Size Guide</span>
                </div>
                <h1 class="size-guide-hero-title">
                    <span class="highlight">Find Your</span> Perfect Fit
                </h1>
                <p class="size-guide-hero-subtitle">
                    Comprehensive size charts and fitting tips for the perfect Different Wear experience
                </p>
            </div>
        </div>
    </section>

    <!-- Quick Size Finder Section -->
    <section class="quick-size-finder-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Quick Size Finder</h2>
                <p>Get your size recommendation in seconds</p>
            </div>
            
            <div class="size-finder-container" data-aos="fade-up">
                <div class="finder-tabs">
                    <button class="finder-tab active" data-category="women">
                        <i class="fas fa-venus"></i>
                        <span>Women</span>
                    </button>
                    <button class="finder-tab" data-category="men">
                        <i class="fas fa-mars"></i>
                        <span>Men</span>
                    </button>
                </div>
                
                <div class="finder-content">
                    <div class="finder-form" id="women-form">
                        <div class="form-group">
                            <label for="height-women">Height</label>
                            <select id="height-women" required>
                                <option value="">Select your height</option>
                                <option value="petite">Petite (Under 5'4")</option>
                                <option value="regular">Regular (5'4" - 5'8")</option>
                                <option value="tall">Tall (Over 5'8")</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="weight-women">Weight Range</label>
                            <select id="weight-women" required>
                                <option value="">Select your weight range</option>
                                <option value="xs">XS (90-120 lbs)</option>
                                <option value="s">S (120-140 lbs)</option>
                                <option value="m">M (140-160 lbs)</option>
                                <option value="l">L (160-180 lbs)</option>
                                <option value="xl">XL (180-200 lbs)</option>
                                <option value="xxl">XXL (200+ lbs)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="body-type-women">Body Type</label>
                            <select id="body-type-women" required>
                                <option value="">Select your body type</option>
                                <option value="slim">Slim</option>
                                <option value="athletic">Athletic</option>
                                <option value="curvy">Curvy</option>
                                <option value="plus">Plus Size</option>
                            </select>
                        </div>
                        
                        <button class="find-size-btn" data-form="women">
                            <i class="fas fa-search"></i>
                            <span>Find My Size</span>
                        </button>
                    </div>
                    
                    <div class="finder-form" id="men-form" style="display: none;">
                        <div class="form-group">
                            <label for="height-men">Height</label>
                            <select id="height-men" required>
                                <option value="">Select your height</option>
                                <option value="short">Short (Under 5'8")</option>
                                <option value="regular">Regular (5'8" - 6'0")</option>
                                <option value="tall">Tall (Over 6'0")</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="weight-men">Weight Range</label>
                            <select id="weight-men" required>
                                <option value="">Select your weight range</option>
                                <option value="xs">XS (120-150 lbs)</option>
                                <option value="s">S (150-170 lbs)</option>
                                <option value="m">M (170-190 lbs)</option>
                                <option value="l">L (190-210 lbs)</option>
                                <option value="xl">XL (210-230 lbs)</option>
                                <option value="xxl">XXL (230+ lbs)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="body-type-men">Body Type</label>
                            <select id="body-type-men" required>
                                <option value="">Select your body type</option>
                                <option value="slim">Slim</option>
                                <option value="athletic">Athletic</option>
                                <option value="regular">Regular</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        
                        <button class="find-size-btn" data-form="men">
                            <i class="fas fa-search"></i>
                            <span>Find My Size</span>
                        </button>
                    </div>
                    
                    <div class="size-recommendation" style="display: none;">
                        <div class="recommendation-header">
                            <i class="fas fa-check-circle"></i>
                            <h3>Your Size Recommendation</h3>
                        </div>
                        <div class="recommendation-content">
                            <div class="recommended-size">
                                <span class="size-label">Recommended Size:</span>
                                <span class="size-value">M</span>
                            </div>
                            <div class="size-details">
                                <p>Based on your measurements, we recommend size <strong>M</strong> for the best fit.</p>
                                <div class="fit-tips">
                                    <h4>Fit Tips:</h4>
                                    <ul>
                                        <li>This size should provide a comfortable, relaxed fit</li>
                                        <li>Consider sizing up for a looser fit</li>
                                        <li>Check individual product measurements for specific items</li>
                                    </ul>
                                </div>
                                <div class="size-actions">
                                    <button class="size-action-btn" onclick="showSizeChart()">
                                        <i class="fas fa-table"></i>
                                        <span>View Size Chart</span>
                                    </button>
                                    <button class="size-action-btn" onclick="showMeasurementGuide()">
                                        <i class="fas fa-ruler"></i>
                                        <span>Measurement Guide</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Measurement Guide Section -->
    <section class="measurement-guide-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>How to Measure</h2>
                <p>Get accurate measurements for the perfect fit</p>
            </div>
            
            <div class="measurement-grid">
                <div class="measurement-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="measurement-image">
                        <div class="measurement-placeholder">
                            <i class="fas fa-user"></i>
                            <span>Chest</span>
                        </div>
                    </div>
                    <div class="measurement-content">
                        <h3>Chest</h3>
                        <p>Measure around the fullest part of your chest, keeping the tape horizontal and snug but not tight.</p>
                        <div class="measurement-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Keep your arms relaxed at your sides</span>
                        </div>
                        <div class="measurement-steps">
                            <div class="step">
                                <span class="step-number">1</span>
                                <span>Stand straight with arms relaxed</span>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <span>Wrap tape around fullest part</span>
                            </div>
                            <div class="step">
                                <span class="step-number">3</span>
                                <span>Keep tape horizontal and snug</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="measurement-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="measurement-image">
                        <div class="measurement-placeholder">
                            <i class="fas fa-user"></i>
                            <span>Waist</span>
                        </div>
                    </div>
                    <div class="measurement-content">
                        <h3>Waist</h3>
                        <p>Measure around your natural waistline, which is typically the narrowest part of your torso.</p>
                        <div class="measurement-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Don't suck in your stomach</span>
                        </div>
                        <div class="measurement-steps">
                            <div class="step">
                                <span class="step-number">1</span>
                                <span>Find your natural waistline</span>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <span>Breathe normally, don't hold breath</span>
                            </div>
                            <div class="step">
                                <span class="step-number">3</span>
                                <span>Wrap tape around narrowest part</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="measurement-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="measurement-image">
                        <div class="measurement-placeholder">
                            <i class="fas fa-user"></i>
                            <span>Hips</span>
                        </div>
                    </div>
                    <div class="measurement-content">
                        <h3>Hips</h3>
                        <p>Measure around the fullest part of your hips, keeping the tape horizontal and parallel to the floor.</p>
                        <div class="measurement-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Stand with your feet together</span>
                        </div>
                        <div class="measurement-steps">
                            <div class="step">
                                <span class="step-number">1</span>
                                <span>Stand with feet together</span>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <span>Find fullest part of hips</span>
                            </div>
                            <div class="step">
                                <span class="step-number">3</span>
                                <span>Keep tape parallel to floor</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="measurement-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="measurement-image">
                        <div class="measurement-placeholder">
                            <i class="fas fa-user"></i>
                            <span>Inseam</span>
                        </div>
                    </div>
                    <div class="measurement-content">
                        <h3>Inseam</h3>
                        <p>Measure from the crotch to the bottom of your ankle, or your desired pant length.</p>
                        <div class="measurement-tip">
                            <i class="fas fa-lightbulb"></i>
                            <span>Tip: Use a pair of well-fitting pants as reference</span>
                        </div>
                        <div class="measurement-steps">
                            <div class="step">
                                <span class="step-number">1</span>
                                <span>Use well-fitting pants as guide</span>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <span>Measure from crotch to ankle</span>
                            </div>
                            <div class="step">
                                <span class="step-number">3</span>
                                <span>Or measure to desired length</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Charts Section -->
    <section class="size-charts-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Size Charts</h2>
                <p>Detailed size charts for men and women</p>
            </div>
            
            <div class="charts-tabs" data-aos="fade-up">
                <button class="chart-tab active" data-chart="women">Women's Sizes</button>
                <button class="chart-tab" data-chart="men">Men's Sizes</button>
            </div>
            
            <div class="size-chart-container">
                <!-- Women's Size Chart -->
                <div class="size-chart active" id="women-chart" data-aos="fade-up">
                    <div class="chart-header">
                        <h3>Women's Size Chart</h3>
                        <p>All measurements in inches</p>
                    </div>
                    
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Bust</th>
                                    <th>Waist</th>
                                    <th>Hips</th>
                                    <th>US Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS</td>
                                    <td>32-34</td>
                                    <td>24-26</td>
                                    <td>34-36</td>
                                    <td>2-4</td>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>34-36</td>
                                    <td>26-28</td>
                                    <td>36-38</td>
                                    <td>4-6</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>36-38</td>
                                    <td>28-30</td>
                                    <td>38-40</td>
                                    <td>6-8</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>38-40</td>
                                    <td>30-32</td>
                                    <td>40-42</td>
                                    <td>8-10</td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td>40-42</td>
                                    <td>32-34</td>
                                    <td>42-44</td>
                                    <td>10-12</td>
                                </tr>
                                <tr>
                                    <td>XXL</td>
                                    <td>42-44</td>
                                    <td>34-36</td>
                                    <td>44-46</td>
                                    <td>12-14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Men's Size Chart -->
                <div class="size-chart" id="men-chart" data-aos="fade-up">
                    <div class="chart-header">
                        <h3>Men's Size Chart</h3>
                        <p>All measurements in inches</p>
                    </div>
                    
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Chest</th>
                                    <th>Waist</th>
                                    <th>Hips</th>
                                    <th>US Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS</td>
                                    <td>34-36</td>
                                    <td>28-30</td>
                                    <td>34-36</td>
                                    <td>30-32</td>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>36-38</td>
                                    <td>30-32</td>
                                    <td>36-38</td>
                                    <td>32-34</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>38-40</td>
                                    <td>32-34</td>
                                    <td>38-40</td>
                                    <td>34-36</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>40-42</td>
                                    <td>34-36</td>
                                    <td>40-42</td>
                                    <td>36-38</td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td>42-44</td>
                                    <td>36-38</td>
                                    <td>42-44</td>
                                    <td>38-40</td>
                                </tr>
                                <tr>
                                    <td>XXL</td>
                                    <td>44-46</td>
                                    <td>38-40</td>
                                    <td>44-46</td>
                                    <td>40-42</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitting Tips Section -->
    <section class="fitting-tips-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Fitting Tips</h2>
                <p>Expert advice for finding your perfect fit</p>
            </div>
            
            <div class="tips-grid">
                <div class="tip-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="tip-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3>Measure Regularly</h3>
                    <p>Your body measurements can change over time. Measure yourself every 6 months for the most accurate sizing.</p>
                </div>
                
                <div class="tip-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="tip-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Consider Fabric</h3>
                    <p>Different fabrics have different stretch and fit characteristics. Check the fabric content and care instructions.</p>
                </div>
                
                <div class="tip-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="tip-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Read Reviews</h3>
                    <p>Customer reviews often include helpful sizing information and fit recommendations for specific items.</p>
                </div>
                
                <div class="tip-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="tip-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>Don't worry if the fit isn't perfect. We offer easy returns and exchanges within 30 days.</p>
                </div>
                
                <div class="tip-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="tip-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Ask for Help</h3>
                    <p>Our customer service team is here to help with sizing questions and recommendations.</p>
                </div>
                
                <div class="tip-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="tip-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Use Our App</h3>
                    <p>Download our mobile app for quick access to size charts and easy shopping on the go.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- International Sizes Section -->
    <section class="international-sizes-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>International Size Conversion</h2>
                <p>Convert between different international sizing systems</p>
            </div>
            
            <div class="conversion-tabs" data-aos="fade-up">
                <button class="conversion-tab active" data-conversion="women">Women's Conversion</button>
                <button class="conversion-tab" data-conversion="men">Men's Conversion</button>
            </div>
            
            <div class="conversion-chart-container">
                <div class="conversion-chart active" id="women-conversion" data-aos="fade-up">
                    <table class="conversion-table">
                        <thead>
                            <tr>
                                <th>US</th>
                                <th>UK</th>
                                <th>EU</th>
                                <th>AU</th>
                                <th>JP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>6</td>
                                <td>34</td>
                                <td>6</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>8</td>
                                <td>36</td>
                                <td>8</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>10</td>
                                <td>38</td>
                                <td>10</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>12</td>
                                <td>40</td>
                                <td>12</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>14</td>
                                <td>42</td>
                                <td>14</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>16</td>
                                <td>44</td>
                                <td>16</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="conversion-chart" id="men-conversion" data-aos="fade-up">
                    <table class="conversion-table">
                        <thead>
                            <tr>
                                <th>US</th>
                                <th>UK</th>
                                <th>EU</th>
                                <th>AU</th>
                                <th>JP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>32</td>
                                <td>32</td>
                                <td>42</td>
                                <td>32</td>
                                <td>M</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>34</td>
                                <td>44</td>
                                <td>34</td>
                                <td>L</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>36</td>
                                <td>46</td>
                                <td>36</td>
                                <td>L</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>38</td>
                                <td>48</td>
                                <td>38</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>40</td>
                                <td>50</td>
                                <td>40</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>42</td>
                                <td>52</td>
                                <td>42</td>
                                <td>XXL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="size-guide-support-section">
        <div class="container">
            <div class="support-content" data-aos="fade-up">
                <div class="support-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h2>Need Help with Sizing?</h2>
                <p>Our customer service team is here to help you find the perfect fit</p>
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

        // Finder tabs functionality
        document.querySelectorAll('.finder-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Update active tab
                document.querySelectorAll('.finder-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding form
                document.querySelectorAll('.finder-form').forEach(form => {
                    form.style.display = 'none';
                    form.classList.remove('active');
                });
                
                const targetForm = document.getElementById(category + '-form');
                targetForm.style.display = 'block';
                setTimeout(() => {
                    targetForm.classList.add('active');
                }, 10);
                
                // Hide any existing recommendation
                document.querySelector('.size-recommendation').style.display = 'none';
            });
        });

        // Size finder functionality
        document.querySelectorAll('.find-size-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const formType = this.getAttribute('data-form');
                const height = document.getElementById('height-' + formType).value;
                const weight = document.getElementById('weight-' + formType).value;
                const bodyType = document.getElementById('body-type-' + formType).value;
                
                if (!height || !weight || !bodyType) {
                    showNotification('Please fill in all fields', 'error');
                    return;
                }
                
                // Enhanced size recommendation logic
                let recommendedSize = getSizeRecommendation(formType, height, weight, bodyType);
                
                // Show recommendation
                const recommendation = document.querySelector('.size-recommendation');
                document.querySelector('.size-value').textContent = recommendedSize.size;
                
                // Update fit tips based on recommendation
                updateFitTips(recommendedSize, formType);
                
                recommendation.style.display = 'block';
                
                // Scroll to recommendation
                recommendation.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                
                showNotification('Size recommendation generated!', 'success');
            });
        });

        // Enhanced size recommendation function
        function getSizeRecommendation(gender, height, weight, bodyType) {
            let size = 'M';
            let confidence = 'medium';
            let fitType = 'regular';
            
            // Women's sizing logic
            if (gender === 'women') {
                if (weight === 'xs' || (weight === 's' && bodyType === 'slim')) {
                    size = 'XS';
                    fitType = 'slim';
                } else if (weight === 's' || (weight === 'm' && bodyType === 'slim')) {
                    size = 'S';
                    fitType = 'slim';
                } else if (weight === 'm' || (weight === 'l' && bodyType === 'slim')) {
                    size = 'M';
                    fitType = 'regular';
                } else if (weight === 'l' || (weight === 'xl' && bodyType === 'slim')) {
                    size = 'L';
                    fitType = 'regular';
                } else if (weight === 'xl' || (weight === 'xxl' && bodyType === 'slim')) {
                    size = 'XL';
                    fitType = 'loose';
                } else if (weight === 'xxl') {
                    size = 'XXL';
                    fitType = 'loose';
                }
                
                // Adjust for body type
                if (bodyType === 'curvy' && ['S', 'M', 'L'].includes(size)) {
                    size = size === 'S' ? 'M' : size === 'M' ? 'L' : 'XL';
                } else if (bodyType === 'plus' && ['XS', 'S', 'M'].includes(size)) {
                    size = size === 'XS' ? 'S' : size === 'S' ? 'M' : 'L';
                }
            }
            
            // Men's sizing logic
            if (gender === 'men') {
                if (weight === 'xs' || (weight === 's' && bodyType === 'slim')) {
                    size = 'XS';
                    fitType = 'slim';
                } else if (weight === 's' || (weight === 'm' && bodyType === 'slim')) {
                    size = 'S';
                    fitType = 'slim';
                } else if (weight === 'm' || (weight === 'l' && bodyType === 'slim')) {
                    size = 'M';
                    fitType = 'regular';
                } else if (weight === 'l' || (weight === 'xl' && bodyType === 'slim')) {
                    size = 'L';
                    fitType = 'regular';
                } else if (weight === 'xl' || (weight === 'xxl' && bodyType === 'slim')) {
                    size = 'XL';
                    fitType = 'loose';
                } else if (weight === 'xxl') {
                    size = 'XXL';
                    fitType = 'loose';
                }
                
                // Adjust for body type
                if (bodyType === 'large' && ['S', 'M', 'L'].includes(size)) {
                    size = size === 'S' ? 'M' : size === 'M' ? 'L' : 'XL';
                }
            }
            
            return { size, confidence, fitType, gender };
        }

        // Update fit tips based on recommendation
        function updateFitTips(recommendation, gender) {
            const fitTips = document.querySelector('.fit-tips ul');
            let tips = [];
            
            if (recommendation.fitType === 'slim') {
                tips = [
                    'This size provides a fitted, tailored look',
                    'Consider sizing up if you prefer a looser fit',
                    'Perfect for layering with other clothing',
                    'Check individual product measurements for specific items'
                ];
            } else if (recommendation.fitType === 'regular') {
                tips = [
                    'This size should provide a comfortable, relaxed fit',
                    'Consider sizing up for a looser fit',
                    'Great for everyday wear and comfort',
                    'Check individual product measurements for specific items'
                ];
            } else {
                tips = [
                    'This size provides a roomy, comfortable fit',
                    'Consider sizing down if you prefer a tighter fit',
                    'Perfect for relaxed, casual styling',
                    'Check individual product measurements for specific items'
                ];
            }
            
            // Update tips in DOM
            fitTips.innerHTML = tips.map(tip => '<li>' + tip + '</li>').join('');
        }

        // Navigation functions
        function showSizeChart() {
            document.querySelector('.size-charts-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        function showMeasurementGuide() {
            document.querySelector('.measurement-guide-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Chart tabs functionality
        document.querySelectorAll('.chart-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const chartType = this.getAttribute('data-chart');
                
                // Update active tab
                document.querySelectorAll('.chart-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding chart
                document.querySelectorAll('.size-chart').forEach(chart => {
                    chart.classList.remove('active');
                });
                document.getElementById(chartType + '-chart').classList.add('active');
            });
        });

        // Conversion tabs functionality
        document.querySelectorAll('.conversion-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const conversionType = this.getAttribute('data-conversion');
                
                // Update active tab
                document.querySelectorAll('.conversion-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding conversion chart
                document.querySelectorAll('.conversion-chart').forEach(chart => {
                    chart.classList.remove('active');
                });
                document.getElementById(conversionType + '-conversion').classList.add('active');
            });
        });

        // Measurement card hover effects
        document.querySelectorAll('.measurement-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Tip card hover effects
        document.querySelectorAll('.tip-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Initialize particles effect
        function createSizeGuideParticles() {
            const particlesContainer = document.querySelector('.size-guide-particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'size-guide-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (Math.random() * 5 + 5) + 's';
                particlesContainer.appendChild(particle);
            }
        }

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
            createSizeGuideParticles();
            
            // Add smooth scrolling for all internal links
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
        });
    ";
    
    // Include footer
    include 'footer.php';
?> 