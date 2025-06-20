<?php
  // require("validate_user.php"); 
  $server   = "localhost";
  $username = "root";
  $password = "";
  $db_name  = "Different Wear";

  $mysqli = new mysqli($server, $username, $password, $db_name);

  if ($mysqli->connect_error) {
    // Detect AJAX
    $isAjax = false;
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $isAjax = true;
    }
    if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
        $isAjax = true;
    }
    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
        exit;
    }
    echo $mysqli->connect_errno . "<br />";
    echo $mysqli->connect_errno . "<br />";
    die("connection failed");
  }
  // echo "connection successful";

