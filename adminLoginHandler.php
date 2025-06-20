<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';
    
    $username    = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM user_logs WHERE username='$username' AND password='$password' ";
    

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      $_SESSION['username'] = $username;
      header('location: dashboard.php');
    } else {
      header('location: adminLogin.php?status=fail');
    }
    
  }