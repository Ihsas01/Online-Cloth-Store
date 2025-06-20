<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

require 'db_connection.php';
$email = $_SESSION['email'];

// Fetch cart items for the user
$sql = "SELECT c.p_id, p.p_name, p.picture, p.price, COUNT(*) as quantity FROM cart c JOIN product p ON c.p_id = p.p_id WHERE c.email = '" . $mysqli->real_escape_string($email) . "' GROUP BY c.p_id, p.p_name, p.picture, p.price";
$result = $mysqli->query($sql);
$cart_items = [];
$total = 0;
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $row['subtotal'] = $row['price'] * $row['quantity'];
        $total += $row['subtotal'];
        $cart_items[] = $row;
    }
}

$page_title = "My Cart";
$page_description = "View and manage your shopping cart.";
$page_keywords = "cart, shopping cart, checkout, online store, different wear";
include 'header.php';
?>

<section class="cart-section">
    <?php if (empty($cart_items)): ?>
        <div class="empty-cart" data-aos="fade-up">
            <div class="empty-cart-icon"><i class="fas fa-shopping-cart"></i></div>
            <h2>Your cart is empty</h2>
            <p>Looks like you haven't added anything to your cart yet.<br>Start shopping and discover our latest arrivals!</p>
            <div class="empty-cart-actions">
                <a href="products.php" class="btn btn-primary"><i class="fas fa-shopping-bag"></i> Continue Shopping</a>
            </div>
        </div>
    <?php else: ?>
    <div class="cart-layout">
        <div class="cart-items" data-aos="fade-up">
            <div class="cart-header">
                <h2>Your Cart</h2>
                <form action="clearCart.php" method="post">
                    <button type="submit" class="clear-cart-btn"><i class="fas fa-trash"></i> Clear Cart</button>
                </form>
            </div>
            <div class="cart-items-list">
                <?php foreach ($cart_items as $item): ?>
                <div class="cart-item" data-aos="fade-up">
                    <div class="item-image">
                        <img src="images/products/<?php echo htmlspecialchars($item['picture']); ?>" alt="<?php echo htmlspecialchars($item['p_name']); ?>">
                        <button class="remove-item" data-id="<?php echo $item['p_id']; ?>" title="Remove"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-details">
                        <h3><?php echo htmlspecialchars($item['p_name']); ?></h3>
                        <div class="product-price">LKR <?php echo number_format($item['price'], 2); ?></div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn minus" data-id="<?php echo $item['p_id']; ?>">-</button>
                        <span class="quantity-display" id="qty-<?php echo $item['p_id']; ?>"><?php echo $item['quantity']; ?></span>
                        <button class="quantity-btn plus" data-id="<?php echo $item['p_id']; ?>">+</button>
                    </div>
                    <div class="subtotal-amount">LKR <?php echo number_format($item['subtotal'], 2); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="continue-shopping">
                <a href="products.php" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Continue Shopping</a>
            </div>
        </div>
        <div class="cart-summary" data-aos="fade-left">
            <div class="summary-card">
                <div class="summary-header">
                    <h3>Order Summary</h3>
                    <i class="fas fa-receipt"></i>
                </div>
                <div class="summary-items">
                    <div class="summary-item">
                        <span>Subtotal</span>
                        <span>LKR <?php echo number_format($total, 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                </div>
                <div class="summary-divider" style="border-top:1px solid #e2e8f0;margin:16px 0;"></div>
                <div class="summary-total" style="font-size:1.3rem;font-weight:700;display:flex;justify-content:space-between;">
                    <span>Total</span>
                    <span>LKR <?php echo number_format($total, 2); ?></span>
                </div>
                <div class="summary-actions" style="margin-top:24px;display:flex;gap:12px;">
                    <a href="checkout.php" class="btn btn-primary" style="flex:1;"><i class="fas fa-credit-card"></i> Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
AOS.init({ duration: 900, once: true, offset: 80 });

// Remove item from cart (AJAX)
document.querySelectorAll('.remove-item').forEach(btn => {
    btn.addEventListener('click', function() {
        const p_id = this.getAttribute('data-id');
        if (confirm('Remove this item from your cart?')) {
            fetch('cartHandler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: `p_id=${p_id}&action=remove`
            })
            .then(res => res.json())
            .then(data => { if (data.success) location.reload(); });
        }
    });
});
// Quantity controls (AJAX)
document.querySelectorAll('.quantity-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const p_id = this.getAttribute('data-id');
        const isPlus = this.classList.contains('plus');
        fetch('cartHandler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: `p_id=${p_id}&action=${isPlus ? 'add' : 'remove'}`
        })
        .then(res => res.json())
        .then(data => { if (data.success) location.reload(); });
    });
});
</script>

<?php include 'footer.php'; ?> 