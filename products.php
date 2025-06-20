<?php
    // Page-specific variables
    $page_title = "All Products";
    $page_description = "Discover our complete collection of premium fashion items. Browse through our latest trends and styles.";
    $page_keywords = "products, fashion, clothing, online store, premium clothes, trendy fashion, different-wear products";
    
    // Include header
    include 'header.php';
    
    require 'db_connection.php';
?>

    <!-- Page Header -->
    <section class="page-header" style="background: var(--gradient-primary); padding: 8rem 0 4rem; margin-top: 60px; text-align: center; color: var(--text-white);">
        <div class="container">
            <h1 data-aos="fade-up">All Products</h1>
            <p data-aos="fade-up" data-aos-delay="100">Discover our complete collection of premium fashion items</p>
        </div>
    </section>

    <!-- Filters Section -->
    <section class="filters-section" style="padding: 2rem 0; background: var(--bg-light);">
        <div class="container">
            <div class="filter-panel filter-panel-modern" data-aos="fade-up">
                <div class="filter-row filter-row-modern">
                    <span class="filter-icon"><i class="fas fa-sort-amount-down"></i></span>
                    <label for="sort-select">Sort By:</label>
                    <select id="sort-select" class="filter-select">
                        <option value="default">Default Sorting</option>
                        <option value="popularity">Sort By Popularity</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Sort By Rating</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>
                <div class="filter-row filter-row-modern">
                    <span class="filter-icon"><i class="fas fa-tags"></i></span>
                    <label for="category-filter">Category:</label>
                    <select id="category-filter" class="filter-select">
                        <option value="all">All Categories</option>
                        <option value="casual">Casual Wear</option>
                        <option value="formal">Formal Wear</option>
                        <option value="sports">Sportswear</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div>
                <div class="filter-row filter-row-modern">
                    <span class="filter-icon"><i class="fas fa-money-bill-wave"></i></span>
                    <label for="price-range">Price Range:</label>
                    <select id="price-range" class="filter-select">
                        <option value="all">All Prices</option>
                        <option value="0-50">LKR 0 - LKR 50</option>
                        <option value="50-100">LKR 50 - LKR 100</option>
                        <option value="100-200">LKR 100 - LKR 200</option>
                        <option value="200+">LKR 200+</option>
                    </select>
                </div>
                <div class="filter-row filter-row-modern view-toggle-row">
                    <span class="filter-icon"><i class="fas fa-th-large"></i></span>
                    <button class="view-btn active" data-view="grid" title="Grid View"><i class="fas fa-th"></i></button>
                    <button class="view-btn" data-view="list" title="List View"><i class="fas fa-list"></i></button>
                </div>
                <div class="filter-row filter-row-modern reset-row">
                    <button id="reset-filters" class="btn btn-outline" type="button"><i class="fas fa-undo"></i> Reset Filters</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section" style="padding: 4rem 0;">
        <div class="container">
            <div class="products-grid" id="products-grid">
                <!-- Skeleton Loader -->
                <div id="skeleton-loader" style="display:none;">
                  <div class="skeleton-card"></div>
                  <div class="skeleton-card"></div>
                  <div class="skeleton-card"></div>
                  <div class="skeleton-card"></div>
                </div>
                <?php
                    $sql = "SELECT * FROM product ORDER BY p_id DESC";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="product-card" data-aos="fade-up" data-category="all" data-price="'.$row['price'].'">';
                            echo '<div class="product-image">';
                            echo '<img src="images/products/'.$row['picture'].'" alt="'.$row['p_name'].'">';
                            echo '<div class="product-overlay">';
                            echo '<div class="product-actions">';
                            echo '<a href="single-product.php?p_id='.$row['p_id'].'" class="action-btn" title="View Details"><i class="fas fa-eye"></i></a>';
                            echo '<button class="action-btn add-to-cart" data-id="'.$row['p_id'].'" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>';
                            echo '<button class="action-btn add-to-wishlist" title="Add to Wishlist"><i class="fas fa-heart"></i></button>';
                            echo '<button class="action-btn quick-view" data-id="'.$row['p_id'].'" title="Quick View"><i class="fas fa-search"></i></button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="product-content">';
                            echo '<h3 class="product-title">'.$row['p_name'].'</h3>';
                            echo '<div class="product-price">LKR '.$row['price'].'.00</div>';
                            echo '<div class="product-rating">';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star"></i>';
                            echo '<i class="fas fa-star-half-alt"></i>';
                            echo '<span>(4.5)</span>';
                            echo '</div>';
                            echo '<div class="product-meta">';
                            echo '<span class="product-category">'.$row['p_type'].'</span>';
                            echo '<span class="product-availability">In Stock</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }      
                    } else {
                        echo '<div class="no-products">No products found.</div>';
                    }
                ?>
            </div>
            <!-- Quick View Modal -->
            <div id="quick-view-modal" class="quick-view-modal" style="display:none;">
                <div class="quick-view-content">
                    <span class="close-modal">&times;</span>
                    <div id="quick-view-details"></div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="pagination pagination-modern" data-aos="fade-up">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
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

        // View Switcher
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const view = this.getAttribute('data-view');
                const grid = document.getElementById('products-grid');
                grid.classList.remove('list-view', 'grid-view');
                grid.classList.add(view + '-view');
            });
        });

        // Add to Cart Functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                this.innerHTML = '<i class=\"fas fa-check\"></i>';
                this.classList.add('added');
                setTimeout(() => {
                    this.innerHTML = '<i class=\"fas fa-shopping-cart\"></i>';
                    this.classList.remove('added');
                }, 2000);
            });
        });

        // Add to Wishlist Functionality
        document.querySelectorAll('.add-to-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // Quick View Modal
        document.querySelectorAll('.quick-view').forEach(btn => {
            btn.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const card = this.closest('.product-card');
                const title = card.querySelector('.product-title').textContent;
                const price = card.querySelector('.product-price').textContent;
                const img = card.querySelector('img').src;
                document.getElementById('quick-view-details').innerHTML = `
                    <img src='\${img}' style='width:100%;border-radius:1rem;margin-bottom:1rem;'>
                    <h2>\${title}</h2>
                    <div style='font-size:1.5rem;color:var(--primary-color);margin-bottom:1rem;'>\${price}</div>
                    <button class='btn btn-primary' style='width:100%;'>Add to Cart</button>
                `;
                document.getElementById('quick-view-modal').style.display = 'flex';
            });
        });
        document.querySelector('.close-modal').addEventListener('click', function() {
            document.getElementById('quick-view-modal').style.display = 'none';
        });
        window.addEventListener('click', function(e) {
            if (e.target === document.getElementById('quick-view-modal')) {
                document.getElementById('quick-view-modal').style.display = 'none';
            }
        });

        // Skeleton Loader for Filtering
        function showSkeleton() {
            document.getElementById('skeleton-loader').style.display = 'grid';
            document.querySelectorAll('.product-card').forEach(card => card.style.display = 'none');
        }
        function hideSkeleton() {
            document.getElementById('skeleton-loader').style.display = 'none';
            document.querySelectorAll('.product-card').forEach(card => card.style.display = '');
        }
        // Example: showSkeleton(); setTimeout(hideSkeleton, 1500);

        // Filter Functionality (add showSkeleton/hideSkeleton as needed)
        const sortSelect = document.getElementById('sort-select');
        const categoryFilter = document.getElementById('category-filter');
        const priceRange = document.getElementById('price-range');
        const productsGrid = document.getElementById('products-grid');
        function filterProducts() {
            showSkeleton();
            setTimeout(() => {
                // Filtering logic here
                hideSkeleton();
            }, 1000);
        }
        sortSelect.addEventListener('change', filterProducts);
        categoryFilter.addEventListener('change', filterProducts);
        priceRange.addEventListener('change', filterProducts);

        document.getElementById('reset-filters').onclick = function() {
            document.getElementById('sort-select').selectedIndex = 0;
            document.getElementById('category-filter').selectedIndex = 0;
            document.getElementById('price-range').selectedIndex = 0;
            // Optionally trigger filterProducts() if needed
            if (typeof filterProducts === 'function') filterProducts();
        };
    ";
    
    // Include footer
    include 'footer.php';
?> 

<style>
.filter-panel-modern {
    background: #fff;
    border-radius: 1.5rem;
    box-shadow: 0 6px 32px rgba(30,41,59,0.08);
    padding: 2rem 2.5rem;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2rem;
}
.filter-row-modern {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 0;
}
.filter-icon {
    color: var(--primary-color);
    font-size: 1.2rem;
    margin-right: 0.5rem;
}
.filter-select {
    border-radius: 0.5rem;
    border: 1px solid #e2e8f0;
    padding: 0.5rem 1.2rem;
    font-size: 1rem;
    background: #f8fafc;
    transition: border 0.2s;
}
.filter-select:focus {
    border: 1.5px solid var(--primary-color);
    outline: none;
}
.view-btn {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 0.5rem;
    padding: 0.5rem 1.2rem;
    margin-right: 0.5rem;
    font-size: 1.1rem;
    color: var(--primary-color);
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
}
.view-btn.active, .view-btn:hover {
    background: var(--primary-color);
    color: #fff;
    box-shadow: 0 2px 8px rgba(30,41,59,0.08);
}
.reset-row {
    margin-left: auto;
}
#reset-filters {
    border-radius: 0.5rem;
    padding: 0.5rem 1.5rem;
    font-size: 1rem;
    margin-left: 1rem;
}
@media (max-width: 900px) {
    .filter-panel-modern {
        flex-direction: column;
        align-items: stretch;
        gap: 1.2rem;
        padding: 1.2rem 1rem;
    }
    .reset-row {
        margin-left: 0;
    }
}
.pagination-modern {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    margin: 2.5rem 0 1rem 0;
    background: #fff;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(30,41,59,0.07);
    padding: 1rem 2rem;
}
.page-btn {
    border: none;
    background: #f8fafc;
    color: var(--primary-color);
    font-size: 1.15rem;
    font-weight: 600;
    border-radius: 0.5rem;
    padding: 0.6rem 1.2rem;
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
    cursor: pointer;
    box-shadow: 0 1px 4px rgba(30,41,59,0.04);
    outline: none;
}
.page-btn.active, .page-btn:hover {
    background: var(--primary-color);
    color: #fff;
    box-shadow: 0 2px 8px rgba(30,41,59,0.09);
}
.page-btn i {
    font-size: 1.1rem;
}
@media (max-width: 600px) {
    .pagination-modern {
        padding: 0.7rem 0.5rem;
        gap: 0.2rem;
    }
    .page-btn {
        padding: 0.5rem 0.7rem;
        font-size: 1rem;
    }
}
</style>
<script>
document.getElementById('reset-filters').onclick = function() {
    document.getElementById('sort-select').selectedIndex = 0;
    document.getElementById('category-filter').selectedIndex = 0;
    document.getElementById('price-range').selectedIndex = 0;
    // Optionally trigger filterProducts() if needed
    if (typeof filterProducts === 'function') filterProducts();
};
</script> 