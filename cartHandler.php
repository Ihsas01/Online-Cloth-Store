<?php
// Suppress errors for AJAX requests
if (
    !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
) {
    error_reporting(0);
    ini_set('display_errors', 0);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require 'db_connection.php';

  // Detect AJAX request
  $isAjax = false;
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $isAjax = true;
  }
  if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
      $isAjax = true;
  }

  // Not logged in
  if (!isset($_SESSION['email'])) {
      if ($isAjax) {
          header('Content-Type: application/json');
          echo json_encode(['success' => false, 'login' => true, 'message' => 'Please login to add to cart.']);
          exit;
      } else {
          echo "<script>alert('Please Login to Add to Cart');</script>";
          echo "<script>window.location.href = 'index.php';</script>";
          die();
      }
  }

  $email = $_SESSION['email'];
  $p_id = isset($_POST['p_id']) ? $_POST['p_id'] : null;

  // Validate product ID for actions that require it
  if ((isset($_POST['action']) && $_POST['action'] !== 'clear') && (empty($p_id) || !is_numeric($p_id))) {
      if ($isAjax) {
          header('Content-Type: application/json');
          echo json_encode(['success' => false, 'message' => 'Invalid product ID.']);
          exit;
      } else {
          echo "<script>alert('Invalid product ID.');</script>";
          echo "<script>window.location.href = 'cart.php';</script>";
          exit;
      }
  }

  // Remove product from cart if action is remove
  if (isset($_POST['action']) && $_POST['action'] === 'remove') {
      $sql = "DELETE FROM cart WHERE p_id = $p_id AND email = '$email' LIMIT 1";
      $result = $mysqli->query($sql);

      if ($isAjax) {
          header('Content-Type: application/json');
          echo json_encode(['success' => (bool)$result]);
          exit;
      }

      if ($result) {
          echo "<script>alert('Product removed from cart successfully');</script>";
          echo "<script>window.location.href = 'cart.php';</script>";
      } else {
          echo "<script>alert('Failed to remove product from cart');</script>";
          echo "<script>window.location.href = 'cart.php';</script>";
      }
      exit;
  }

  // Clear all products from cart if action is clear
  if (isset($_POST['action']) && $_POST['action'] === 'clear') {
      $sql = "DELETE FROM cart WHERE email = '$email'";
      $result = $mysqli->query($sql);

      if ($isAjax) {
          header('Content-Type: application/json');
          echo json_encode(['success' => (bool)$result]);
          exit;
      }

      if ($result) {
          echo "<script>alert('Cart cleared successfully');</script>";
          echo "<script>window.location.href = 'cart.php';</script>";
      } else {
          echo "<script>alert('Failed to clear cart');</script>";
          echo "<script>window.location.href = 'cart.php';</script>";
      }
      exit;
  }

  // Add product to cart
  $sql = "INSERT INTO cart (p_id, email) VALUES ($p_id, '$email') ";
  $result = $mysqli->query($sql);

  if ($isAjax) {
      header('Content-Type: application/json');
      echo json_encode(['success' => (bool)$result]);
      exit;
  }

  if ($result) {
    echo "<script>alert('Product Adding to Cart Successfully');</script>";
    echo "<script>window.location.href = 'cart.php';</script>";
  } else {
    echo "<script>alert('Product Adding to Cart Failed');</script>";
    echo "<script>window.location.href = 'product.php';</script>";
  }
  
}