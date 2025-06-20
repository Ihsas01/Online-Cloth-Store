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
    <title>Admin Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4f8cff 0%, #38b6ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 400px;
            margin: auto;
            border-radius: 1rem;
            box-shadow: 0 4px 32px rgba(0,0,0,0.10);
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .avatar {
            width: 80px;
            height: 80px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -50px auto 20px auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            font-size: 2.5rem;
            color: #4f8cff;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(79,140,255,.15);
            border-color: #4f8cff;
        }
        .btn-custom {
            background: linear-gradient(90deg, #4f8cff, #38b6ff);
            color: #fff;
            border: none;
            border-radius: 0.5rem;
            transition: background 0.2s;
        }
        .btn-custom:hover {
            background: linear-gradient(90deg, #38b6ff, #4f8cff);
        }
        .show-password {
            cursor: pointer;
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card bg-white p-4 position-relative">
            <div class="avatar">
                <i class="bi bi-person-lock"></i>
            </div>
            <h2 class="text-center mb-4">Admin Login</h2>
            <?php if ($status === 'fail'): ?>
                <div class="alert alert-danger text-center" role="alert">
                    Username or Password is Wrong.
                </div>
            <?php endif; ?>
            <form action="adminLoginHandler.php" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required autofocus>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    <span class="show-password" onclick="togglePassword()"><i class="bi bi-eye" id="toggleIcon"></i></span>
                </div>
                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-custom btn-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('bi-eye');
            toggleIcon.classList.add('bi-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('bi-eye-slash');
            toggleIcon.classList.add('bi-eye');
        }
    }
    </script>
</body>
</html>