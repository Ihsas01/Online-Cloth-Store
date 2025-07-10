<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db_connection.php';
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $user_group = trim($_POST['user_group']);

    // Basic validation
    if ($username === '' || $password === '' || $user_group === '') {
        header('Location: dashboard.php?user_status=empty');
        exit();
    }

    // Check for duplicate username
    $sql = "SELECT * FROM user_logs WHERE username = '$username'";
    $result = $mysqli->query($sql);
    if ($result && $result->num_rows > 0) {
        header('Location: dashboard.php?user_status=exists');
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO user_logs (username, password, user_group) VALUES ('$username', '$password', '$user_group')";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: dashboard.php?user_status=success');
    } else {
        header('Location: dashboard.php?user_status=fail');
    }
    exit();
} else {
    header('Location: dashboard.php');
    exit();
} 