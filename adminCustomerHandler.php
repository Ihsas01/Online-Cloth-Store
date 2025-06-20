<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';

    $email    = $_POST['email'];

    $sql = "DELETE FROM customer WHERE email = '$email'";

    $result = $mysqli->query($sql);
    
    if ($result) {
      echo "<script>alert('Successfully deleted');</script>";
      echo "<script>window.location.href = 'dashboard.php';</script>";
    } else {
      echo "<script>alert('Failed to delete. Please try again later.');</script>";
      echo "<script>window.location.href = 'dashboard.php';</script>";

    }

  }