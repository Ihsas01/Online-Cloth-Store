<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';

    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $number   = $_POST['number'];
   
    
    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      header('location: login.php?status=exists');
    } else {

      $sql = "INSERT INTO customer VALUES ('$fullname', '$email', '$password', $number)";
      $result = $mysqli->query($sql);
      
      if ($result) {
        header('location: login.php?status=success');
      } else {
        header('location: login.php?status=register-fail');
      }
    }
    

  }