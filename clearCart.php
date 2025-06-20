<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Clear Cart</title></head><body style="background:#f8fafc;display:flex;align-items:center;justify-content:center;height:100vh;"><div style="background:#fff;padding:2.5rem 2rem;border-radius:1.5rem;box-shadow:0 6px 32px rgba(30,41,59,0.09);text-align:center;max-width:350px;width:90vw;"><div style="font-size:2.5rem;color:#ef4444;margin-bottom:1rem;"><i class=\'fas fa-exclamation-triangle\'></i></div><h2 style="color:#1e293b;margin-bottom:1rem;">You must be logged in to clear your cart.</h2><a href="login.php" class="btn btn-primary" style="display:inline-block;margin-top:1.5rem;padding:0.7rem 2rem;background:#6366f1;color:#fff;border-radius:0.5rem;text-decoration:none;font-weight:600;transition:background 0.2s;">Login</a></div></body></html>';
    exit;
}
require 'db_connection.php';
$email = $_SESSION['email'];
$mysqli->query("DELETE FROM cart WHERE email = '$email'");
// Optionally clear cart count in session if stored
if (isset($_SESSION['cart_count'])) {
    $_SESSION['cart_count'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Cleared</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        body { background: #f8fafc; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .clear-cart-card {
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: 0 6px 32px rgba(30,41,59,0.09);
            padding: 2.5rem 2rem;
            text-align: center;
            max-width: 350px;
            width: 90vw;
            animation: fadeIn 0.7s cubic-bezier(.4,0,.2,1);
        }
        .clear-cart-icon {
            font-size: 3rem;
            color: #10b981;
            margin-bottom: 1.2rem;
            animation: popIn 0.7s cubic-bezier(.4,0,.2,1);
        }
        .clear-cart-title {
            color: #1e293b;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.7rem;
        }
        .clear-cart-text {
            color: #64748b;
            font-size: 1.08rem;
            margin-bottom: 2rem;
        }
        .clear-cart-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        .clear-cart-btn {
            padding: 0.7rem 2rem;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            background: #6366f1;
            color: #fff;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
        }
        .clear-cart-btn.secondary {
            background: #f8fafc;
            color: #6366f1;
            border: 1.5px solid #e2e8f0;
        }
        .clear-cart-btn:hover {
            background: #10b981;
            color: #fff;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes popIn {
            0% { transform: scale(0.7); opacity: 0; }
            70% { transform: scale(1.15); opacity: 1; }
            100% { transform: scale(1); }
        }
        @media (max-width: 600px) {
            .clear-cart-card { padding: 1.2rem 0.5rem; }
            .clear-cart-title { font-size: 1.1rem; }
        }
    </style>
</head>
<body>
    <div class="clear-cart-card" data-aos="zoom-in">
        <div class="clear-cart-icon"><i class="fas fa-check-circle"></i></div>
        <div class="clear-cart-title">Your cart has been cleared!</div>
        <div class="clear-cart-text">You can continue shopping or return to the home page.</div>
        <div class="clear-cart-actions">
            <a href="products.php" class="clear-cart-btn secondary"><i class="fas fa-shopping-bag"></i> View Products</a>
            <a href="index.php" class="clear-cart-btn"><i class="fas fa-home"></i> Go to Home</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({ duration: 900, once: true, offset: 80 });
    // Update cart icon count in header if present
    window.onload = function() {
        var cartCount = document.querySelector('.cart-count');
        if (cartCount) {
            cartCount.textContent = '';
            cartCount.style.display = 'none';
        }
        // Redirect to cart.php after 1.5 seconds
        setTimeout(function() {
            window.location.href = 'cart.php';
        }, 1500);
    };
    </script>
</body>
</html> 