<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';

      if (!isset($_SESSION['email'])) {
          echo "<script>alert('Please Login to Add to Cart');</script>";
          echo "<script>window.location.href = 'index.php';</script>";
          die();
      }

    $email    = $_SESSION['email'];
    $p_id = isset($_POST['p_id']) ? $_POST['p_id'] : null;

    // Remove product from cart if action is remove
    if (isset($_POST['action']) && $_POST['action'] === 'remove') {
        $sql = "DELETE FROM cart WHERE p_id = $p_id AND email = '$email' LIMIT 1";
        $result = $mysqli->query($sql);

        $isAjax = false;
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $isAjax = true;
        }
        if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $isAjax = true;
        }

        if ($isAjax) {
            header('Content-Type: application/json');
            if ($result) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
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

        $isAjax = false;
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $isAjax = true;
        }
        if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $isAjax = true;
        }

        if ($isAjax) {
            header('Content-Type: application/json');
            if ($result) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
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

    $sql = "INSERT INTO cart (p_id, email) VALUES ($p_id, '$email') ";

    $result = $mysqli->query($sql);

    // Check if AJAX request
    $isAjax = false;
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $isAjax = true;
    }
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
        $isAjax = true;
    }

    if ($isAjax) {
        header('Content-Type: application/json');
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
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