// Different Wear - Modern JavaScript Functionality

// Global Variables
let cart = JSON.parse(localStorage.getItem('cart')) || [];
let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// Main initialization function
function initializeApp() {
    initializeNavigation();
    initializeAnimations();
    initializeCart();
    initializeWishlist();
    initializeSearch();
    initializeFilters();
    initializeProductGallery();
    initializeQuantitySelectors();
    initializeTabs();
    initializeNewsletter();
    initializeScrollEffects();
    updateCartCount();
}

// Navigation functionality
function initializeNavigation() {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const header = document.querySelector('.header');

    // Mobile navigation toggle
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
    }

    // Header scroll effect
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (navMenu && navMenu.classList.contains('active')) {
            if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            }
        }
    });
}

// Animation initialization
function initializeAnimations() {
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-in-out'
        });
    }

    // Custom animations
    const animatedElements = document.querySelectorAll('[data-animate]');
    animatedElements.forEach(element => {
        const animation = element.getAttribute('data-animate');
        element.classList.add('animate', animation);
    });
}

// Cart functionality
function initializeCart() {
    // Add to cart buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-id');
            const productCard = this.closest('.product-card');
            
            if (productCard) {
                const product = {
                    id: productId,
                    name: productCard.querySelector('.product-title')?.textContent || 'Product',
                    price: parseFloat(productCard.querySelector('.product-price')?.textContent.replace(/[^0-9.]/g, '')) || 0,
                    image: productCard.querySelector('.product-image img')?.src || '',
                    quantity: 1,
                    size: 'M',
                    color: 'Default'
                };
                
                addToCart(product);
                // AJAX call to backend to sync cart
                fetch('cartHandler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `p_id=${encodeURIComponent(productId)}`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showNotification('Product added to cart!', 'success');
                    } else if (data.login) {
                        showNotification('Please login to add to cart.', 'error');
                        setTimeout(() => { window.location.href = 'login.php'; }, 1500);
                    } else {
                        showNotification('Failed to add product to cart.', 'error');
                    }
                })
                .catch(() => {
                    // showNotification('Error communicating with server.', 'error'); // Removed as requested
                });
            }
        });
    });

    // Cart form submissions
    document.querySelectorAll('.add-to-cart-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const productId = formData.get('p_id');
            const size = formData.get('size') || 'M';
            const color = formData.get('color') || 'Default';
            const quantity = parseInt(formData.get('quantity')) || 1;
            
            // Get product info from the page
            const productName = document.querySelector('.product-title')?.textContent || 'Product';
            const productPrice = parseFloat(document.querySelector('.current-price')?.textContent.replace(/[^0-9.]/g, '')) || 0;
            const productImage = document.querySelector('.main-image img')?.src || '';
            
            const product = {
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                quantity: quantity,
                size: size,
                color: color
            };
            
            addToCart(product);
            showNotification('Product added to cart!', 'success');
        });
    });

    // --- Cart Page Actions ---
    // Remove item from cart
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            fetch('cartHandler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `p_id=${encodeURIComponent(productId)}&action=remove`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification('Product removed from cart!', 'success');
                    setTimeout(() => window.location.reload(), 700);
                } else {
                    showNotification('Failed to remove product from cart.', 'error');
                }
            })
            .catch(() => showNotification('Error communicating with server.', 'error'));
        });
    });

    // Clear cart
    const clearCartBtn = document.querySelector('.clear-cart-btn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', function() {
            fetch('cartHandler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'action=clear'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification('Cart cleared!', 'success');
                    // Update cart count in header immediately
                    const cartCount = document.querySelector('.cart-count');
                    if (cartCount) {
                        cartCount.textContent = '';
                        cartCount.style.display = 'none';
                    }
                    setTimeout(() => window.location.reload(), 700);
                } else {
                    showNotification('Failed to clear cart.', 'error');
                }
            })
            .catch(() => showNotification('Error communicating with server.', 'error'));
        });
    }

    // Quantity change (plus/minus)
    document.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const isPlus = this.classList.contains('plus');
            const quantityDisplay = this.closest('.cart-item-qty-controls').querySelector('.quantity-display');
            let currentQty = parseInt(quantityDisplay.textContent);
            let newQty = isPlus ? currentQty + 1 : currentQty - 1;
            if (newQty < 1) newQty = 1;
            // For now, just add or remove one item in DB (since DB stores each as a row)
            // To increase: add one more row; to decrease: remove one row
            const action = isPlus ? 'add' : 'remove';
            fetch('cartHandler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `p_id=${encodeURIComponent(productId)}${action === 'remove' ? '&action=remove' : ''}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    setTimeout(() => window.location.reload(), 400);
                } else {
                    showNotification('Failed to update quantity.', 'error');
                }
            })
            .catch(() => showNotification('Error communicating with server.', 'error'));
        });
    });
}

// Add product to cart
function addToCart(product) {
    const existingItem = cart.find(item => item.id === product.id && item.size === product.size && item.color === product.color);
    
    if (existingItem) {
        existingItem.quantity += product.quantity;
    } else {
        cart.push(product);
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    
    // Animate cart button
    const cartButton = document.querySelector('.cart-icon');
    if (cartButton) {
        cartButton.classList.add('pulse');
        setTimeout(() => cartButton.classList.remove('pulse'), 1000);
    }
}

// Update cart count display
function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    if (cartCount) {
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = totalItems;
        cartCount.style.display = totalItems > 0 ? 'flex' : 'none';
    }
}

// Wishlist functionality
function initializeWishlist() {
    document.querySelectorAll('.add-to-wishlist').forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            if (productCard) {
                const productId = this.getAttribute('data-id') || productCard.getAttribute('data-id');
                const productName = productCard.querySelector('.product-title')?.textContent || 'Product';
                const productPrice = parseFloat(productCard.querySelector('.product-price')?.textContent.replace(/[^0-9.]/g, '')) || 0;
                const productImage = productCard.querySelector('.product-image img')?.src || '';
                
                const product = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage
                };
                
                toggleWishlist(product);
            } else {
                // For single product page
                this.classList.toggle('active');
                showNotification(this.classList.contains('active') ? 'Added to wishlist!' : 'Removed from wishlist!', 'info');
            }
        });
    });
}

// Toggle wishlist item
function toggleWishlist(product) {
    const existingIndex = wishlist.findIndex(item => item.id === product.id);
    
    if (existingIndex > -1) {
        wishlist.splice(existingIndex, 1);
        showNotification('Removed from wishlist!', 'info');
    } else {
        wishlist.push(product);
        showNotification('Added to wishlist!', 'success');
    }
    
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
}

// Search functionality
function initializeSearch() {
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', debounce(function() {
            const query = this.value.toLowerCase();
            searchProducts(query);
        }, 300));
    }
}

// Search products
function searchProducts(query) {
    const productCards = document.querySelectorAll('.product-card');
    
    productCards.forEach(card => {
        const title = card.querySelector('.product-title')?.textContent.toLowerCase() || '';
        const category = card.querySelector('.product-category')?.textContent.toLowerCase() || '';
        
        if (title.includes(query) || category.includes(query)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Filter functionality
function initializeFilters() {
    const filterSelects = document.querySelectorAll('.filter-select');
    const viewButtons = document.querySelectorAll('.view-btn');
    const productsGrid = document.getElementById('products-grid');
    
    // Filter selects
    filterSelects.forEach(select => {
        select.addEventListener('change', function() {
            applyFilters();
        });
    });
    
    // View toggle
    viewButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            viewButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const view = this.getAttribute('data-view');
            if (productsGrid) {
                productsGrid.className = `products-grid ${view}-view`;
            }
        });
    });
}

// Apply filters
function applyFilters() {
    const sortBy = document.getElementById('sort-select')?.value || 'default';
    const category = document.getElementById('category-filter')?.value || 'all';
    const priceRange = document.getElementById('price-range')?.value || 'all';
    
    const productCards = Array.from(document.querySelectorAll('.product-card'));
    
    // Filter by category and price
    productCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category') || 'all';
        const cardPrice = parseFloat(card.getAttribute('data-price')) || 0;
        
        let showCard = true;
        
        // Category filter
        if (category !== 'all' && cardCategory !== category) {
            showCard = false;
        }
        
        // Price filter
        if (priceRange !== 'all') {
            const [min, max] = priceRange.split('-').map(p => p === '+' ? Infinity : parseFloat(p));
            if (cardPrice < min || (max !== Infinity && cardPrice > max)) {
                showCard = false;
            }
        }
        
        card.style.display = showCard ? 'block' : 'none';
    });
    
    // Sort products
    if (sortBy !== 'default') {
        const container = productCards[0]?.parentElement;
        if (container) {
            productCards.sort((a, b) => {
                const priceA = parseFloat(a.getAttribute('data-price')) || 0;
                const priceB = parseFloat(b.getAttribute('data-price')) || 0;
                
                switch (sortBy) {
                    case 'price-low':
                        return priceA - priceB;
                    case 'price-high':
                        return priceB - priceA;
                    case 'newest':
                        return b.getAttribute('data-id') - a.getAttribute('data-id');
                    default:
                        return 0;
                }
            });
            
            productCards.forEach(card => container.appendChild(card));
        }
    }
}

// Product gallery functionality
function initializeProductGallery() {
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.getElementById('main-image');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            if (mainImage) {
                mainImage.src = this.src;
                
                // Update active thumbnail
                thumbnails.forEach(thumb => thumb.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });
}

// Quantity selectors
function initializeQuantitySelectors() {
    const quantityInputs = document.querySelectorAll('#quantity');
    
    quantityInputs.forEach(input => {
        input.addEventListener('change', function() {
            const value = parseInt(this.value);
            const min = parseInt(this.min) || 1;
            const max = parseInt(this.max) || 10;
            
            if (value < min) this.value = min;
            if (value > max) this.value = max;
            
            // Update hidden input
            const hiddenInput = document.getElementById('selected-quantity');
            if (hiddenInput) {
                hiddenInput.value = this.value;
            }
        });
    });
}

// Tab functionality
function initializeTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    
    tabButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Update active tab button
            tabButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Update active tab content
            const tabPanes = document.querySelectorAll('.tab-pane');
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            const activePane = document.getElementById(tabId);
            if (activePane) {
                activePane.classList.add('active');
            }
        });
    });
}

// Newsletter functionality
function initializeNewsletter() {
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                showNotification('Thank you for subscribing!', 'success');
                this.reset();
            }
        });
    }
}

// Scroll effects
function initializeScrollEffects() {
    // Back to top button
    const backToTop = document.getElementById('back-to-top');
    
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Parallax effects
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-parallax') || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
}

// Utility functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Show notification
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(notification => notification.remove());
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
            <span>${message}</span>
            <button class="notification-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        max-width: 400px;
    `;
    
    // Add to page
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Close button functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    });
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }
    }, 5000);
}

// Lazy loading for images
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
if ('IntersectionObserver' in window) {
    initializeLazyLoading();
}

// Ripple effect for submit button
const submitBtn = document.querySelector('.submit-btn');
if (submitBtn) {
  submitBtn.addEventListener('click', function(e) {
    const circle = document.createElement('span');
    circle.className = 'ripple';
    const rect = this.getBoundingClientRect();
    circle.style.left = (e.clientX - rect.left) + 'px';
    circle.style.top = (e.clientY - rect.top) + 'px';
    this.appendChild(circle);
    setTimeout(() => circle.remove(), 600);
  });
}

// Export functions for global use
window.OneClothes = {
    addToCart,
    updateCartCount,
    toggleWishlist,
    showNotification,
    cart,
    wishlist
};
