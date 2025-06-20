<?php
    // Page-specific variables
    $page_title = "Example Page";
    $page_description = "This is an example page showing how to use the new header and footer includes.";
    $page_keywords = "example, demo, header, footer, includes";
    
    // Additional CSS files (optional)
    $additional_css = [
        // 'custom-page.css',
        // 'another-stylesheet.css'
    ];
    
    // Include header
    include 'header.php';
?>

    <!-- Page Content -->
    <section class="page-header" style="background: var(--gradient-primary); padding: 8rem 0 4rem; margin-top: 60px; text-align: center; color: var(--text-white);">
        <div class="container">
            <h1 data-aos="fade-up">Example Page</h1>
            <p data-aos="fade-up" data-aos-delay="100">This demonstrates the new header and footer structure</p>
        </div>
    </section>

    <section class="content-section" style="padding: 4rem 0;">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-8">
                    <h2>How to Use Header and Footer Includes</h2>
                    <p>This page demonstrates how to properly use the new modular header and footer structure.</p>
                    
                    <h3>Step 1: Set Page Variables</h3>
                    <p>At the top of your PHP file, set the page-specific variables:</p>
                    <pre><code>
$page_title = "Your Page Title";
$page_description = "Your page description for SEO";
$page_keywords = "your, keywords, here";
                    </code></pre>
                    
                    <h3>Step 2: Include Header</h3>
                    <p>Include the header file after setting the variables:</p>
                    <pre><code>include 'header.php';</code></pre>
                    
                    <h3>Step 3: Add Your Content</h3>
                    <p>Add your page-specific content here, between the header and footer includes.</p>
                    
                    <h3>Step 4: Set Inline Scripts (Optional)</h3>
                    <p>If you need page-specific JavaScript, set the inline_scripts variable:</p>
                    <pre><code>
$inline_scripts = "
    // Your JavaScript code here
    console.log('Page loaded!');
";
                    </code></pre>
                    
                    <h3>Step 5: Include Footer</h3>
                    <p>Finally, include the footer file:</p>
                    <pre><code>include 'footer.php';</code></pre>
                </div>
                
                <div class="col-md-4">
                    <div class="card" data-aos="fade-left">
                        <div class="card-header">
                            <h4>Benefits</h4>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>Consistent navigation across all pages</li>
                                <li>Easy maintenance and updates</li>
                                <li>SEO-friendly meta tags</li>
                                <li>Modular and reusable code</li>
                                <li>Clean and organized structure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    // Page-specific inline scripts (optional)
    $inline_scripts = "
        // Example page-specific JavaScript
        console.log('Example page loaded successfully!');
        
        // You can add any page-specific functionality here
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded');
        });
    ";
    
    // Page-specific scripts (optional)
    $page_scripts = [
        // 'page-specific.js',
        // 'another-script.js'
    ];
    
    // Analytics code (optional)
    $analytics_code = "
        <!-- Google Analytics or other tracking code can go here -->
        <!-- <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview');
        </script> -->
    ";
    
    // Include footer
    include 'footer.php';
?> 