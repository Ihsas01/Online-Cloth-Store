<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM customer WHERE email='$email' AND password='$password' ";
    
    require 'db_connection.php';

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      $_SESSION['email'] = $email;
      header('location: account.php');
    } else {
      header('location: login.php?status=login-fail');
    }
    
  }