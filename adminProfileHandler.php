<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'db_connection.php';
    $old_username = trim($_POST['old_username']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username === '' || $password === '') {
        header('Location: dashboard.php?profile_status=empty');
        exit();
    }
    // If username changed, check for duplicate
    if ($username !== $old_username) {
        $sql = "SELECT * FROM user_logs WHERE username = '$username'";
        $result = $mysqli->query($sql);
        if ($result && $result->num_rows > 0) {
            header('Location: dashboard.php?profile_status=exists');
            exit();
        }
    }
    // Update user
    $sql = "UPDATE user_logs SET username = '$username', password = '$password' WHERE username = '$old_username'";
    $result = $mysqli->query($sql);
    if ($result) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php?profile_status=success');
    } else {
        header('Location: dashboard.php?profile_status=fail');
    }
    exit();
} else {
    header('Location: dashboard.php');
    exit();
} 