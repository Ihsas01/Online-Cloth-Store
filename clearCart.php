<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo 'You must be logged in to clear your cart.';
    exit;
}
require 'db_connection.php';
$email = $_SESSION['email'];
$mysqli->query("DELETE FROM cart WHERE email = '$email'");
echo 'Your cart has been cleared! <a href="index.php">Go back to home</a>'; 