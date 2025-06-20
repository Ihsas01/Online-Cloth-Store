<?php
    session_start();

    $status = $_GET['status'] ?? '';

    if ($status === 'fail') {
        echo "<script>alert('Username or Password is Wrong.');</script>";
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Admin-Login-Page </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="position: relative;">
    <div>




        
        
        <div class="account-page" style="">
            <div class="container">
                <div class="row">
                    <div class="images">
                    </div>
                    <div class="login-container">
                        <h1>Admin Login</h1>
                        <form action="adminLoginHandler.php" method="post">
                          <input type="text" placeholder="Username" name="username" required>
                          <input type="password" placeholder="password" name="password" required>
                          <input type="submit" value="Login">
                        </form>
                      </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

        

        




    </body>
</html>