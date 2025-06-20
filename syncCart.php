<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// If this is a POST request with cart data, process it
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart'])) {
    require 'db_connection.php';
    $email = $_SESSION['email'];
    $cart = json_decode($_POST['cart'], true);
    if (is_array($cart)) {
        foreach ($cart as $item) {
            $p_id = intval($item['id']);
            $quantity = intval($item['quantity']);
            for ($i = 0; $i < $quantity; $i++) {
                $mysqli->query("INSERT INTO cart (p_id, email) VALUES ($p_id, '$email')");
            }
        }
    }
    // After syncing, redirect to account.php
    header('Location: account.php');
    exit;
}

// If not POST, show a page that reads cart from sessionStorage and POSTs it here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Syncing Cart...</title>
    <script>
    // On page load, check for cart in sessionStorage and send to server
    window.onload = function() {
        var cart = sessionStorage.getItem('cartToSync');
        if (cart) {
            // Send cart to server via POST
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = 'syncCart.php';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'cart';
            input.value = cart;
            form.appendChild(input);
            document.body.appendChild(form);
            // Clear localStorage and sessionStorage cart
            localStorage.removeItem('cart');
            sessionStorage.removeItem('cartToSync');
            form.submit();
        } else {
            // No cart to sync, just go to account.php
            window.location.href = 'account.php';
        }
    };
    </script>
</head>
<body>
    <p>Syncing your cart, please wait...</p>
</body>
</html> 