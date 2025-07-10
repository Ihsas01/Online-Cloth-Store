<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';

    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $message  = $_POST['message'];
    // $phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
    // $subject  = isset($_POST['subject']) ? $_POST['subject'] : '';
   

    $sql = "INSERT INTO contact (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

    $result = $mysqli->query($sql);
    
    if ($result) {
      header('location: contact.php?status=success');
    } else {
      header('location: contact.php?status=fail');
    }

  }