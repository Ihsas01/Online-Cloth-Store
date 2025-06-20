<?php
session_start();
require 'db_connection.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit;
}

$email = $_SESSION['email'];
$sql = "SELECT p.p_id, p.p_name, p.price, p.picture, COUNT(*) AS quantity, (p.price * COUNT(*)) AS subtotal
        FROM product p
        JOIN cart c ON p.p_id = c.p_id
        WHERE c.email = '$email'
        GROUP BY p.p_id";
$result = $mysqli->query($sql);

$cartItems = [];
$total = 0;
$itemCount = 0;

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
        $total += $row['subtotal'];
        $itemCount += $row['quantity'];
    }
}

$page_title = "Shopping Cart";
include 'header.php';
?>
<main class="cart-main">
    <section class="cart-hero">
        <div class="cart-hero-content">
            <h1 class="cart-title">🛒 Your Shopping Cart</h1>
            <p class="cart-subtitle">Review your items, update quantities, and checkout with ease.</p>
        </div>
    </section>
    <section class="cart-section container">
        <?php if (empty($cartItems)): ?>
            <div class="cart-empty-state animate-fade-in" tabindex="0">
                <img src="images/Clothes.png" alt="Empty cart" class="cart-empty-img" />
                <h2>Your cart is empty</h2>
                <p>Looks like you haven't added any items yet.</p>
                <a href="products.php" class="btn btn-primary">Start Shopping</a>
            </div>
        <?php else: ?>
        <div class="cart-layout">
            <div class="cart-items-list" aria-label="Cart Items">
                <?php foreach ($cartItems as $item): ?>
                <article class="cart-item animate-slide-in" data-product-id="<?php echo $item['p_id']; ?>" tabindex="0">
                    <div class="cart-item-img-wrap">
                        <img src="images/products/<?php echo htmlspecialchars($item['picture']); ?>" alt="<?php echo htmlspecialchars($item['p_name']); ?>" class="cart-item-img" />
                    </div>
                    <div class="cart-item-details">
                        <h3 class="cart-item-title"><?php echo htmlspecialchars($item['p_name']); ?></h3>
                        <div class="cart-item-meta">
                            <span class="cart-item-price">$<?php echo number_format($item['price'], 2); ?> <span class="cart-item-each">each</span></span>
                        </div>
                        <div class="cart-item-qty-controls" role="group" aria-label="Quantity controls">
                            <button class="btn quantity-btn minus" data-product-id="<?php echo $item['p_id']; ?>" aria-label="Decrease quantity"><i class="fas fa-minus"></i></button>
                            <span class="quantity-display" aria-live="polite"><?php echo $item['quantity']; ?></span>
                            <button class="btn quantity-btn plus" data-product-id="<?php echo $item['p_id']; ?>" aria-label="Increase quantity"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="cart-item-subtotal">
                        <span>$<?php echo number_format($item['subtotal'], 2); ?></span>
                    </div>
                    <button class="btn btn-danger btn-sm remove-item" data-product-id="<?php echo $item['p_id']; ?>" aria-label="Remove item"><i class="fas fa-times"></i></button>
                </article>
                <?php endforeach; ?>
            </div>
            <aside class="cart-summary sticky-summary" aria-label="Order Summary">
                <div class="cart-summary-card animate-fade-in">
                    <h2 class="summary-title">Order Summary</h2>
                    <ul class="summary-list">
                        <li class="summary-item"><span>Subtotal</span><span>$<?php echo number_format($total, 2); ?></span></li>
                        <li class="summary-item"><span>Tax (8%)</span><span>$<?php echo number_format($total * 0.08, 2); ?></span></li>
                        <li class="summary-item summary-total"><span>Total</span><span>$<?php echo number_format($total * 1.08, 2); ?></span></li>
                    </ul>
                    <button class="btn btn-primary btn-block checkout-btn">Proceed to Checkout</button>
                    <button class="btn btn-outline-danger btn-block clear-cart-btn"><i class="fas fa-trash"></i> Clear Cart</button>
                </div>
            </aside>
        </div>
        <?php endif; ?>
    </section>
    <div id="cart-toast" class="cart-toast" role="status" aria-live="polite" style="display:none;"></div>
    <div id="cart-modal" class="cart-modal" style="display:none;">
        <div class="cart-modal-content">
            <p id="cart-modal-message"></p>
            <button id="cart-modal-confirm" class="btn btn-danger">Yes</button>
            <button id="cart-modal-cancel" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?> 