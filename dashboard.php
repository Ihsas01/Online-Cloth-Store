<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: adminLogin.php');
    }

    require 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .dashboard {
            display: flex;
        }
        
        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            padding: 20px;
            height: 100vh;
        }
        
        .sidebar h2 {
            margin-bottom: 10px;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        
        .sidebar li {
            margin-bottom: 10px;
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
        }
        
        .main-content h2 {
            margin-bottom: 20px;
        }
        
        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        input, select {
            padding: 10px 20px;
        }
    </style>
    <script>
// JavaScript code to handle sidebar links and logout redirection
document.addEventListener('DOMContentLoaded', function() {
    // Get all the sidebar links
    var sidebarLinks = document.querySelectorAll('.sidebar a');
    // Get all the main content sections
    var mainContentSections = document.querySelectorAll('.main-content .card');

    // Add click event listeners to the sidebar links
    sidebarLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var target = event.target.getAttribute('href').substring(1);

            // Handle logout link
            if (target === 'logout') {
                window.location.href = 'adminLogout.php';
            } else {
                // Hide all main content sections
                mainContentSections.forEach(function(section) {
                    section.style.display = 'none';
                });

                // Show the clicked link's main content section or home section
                if (target === 'home') {
                    document.getElementById('home').style.display = 'block';
                } else {
                    document.getElementById(target).style.display = 'block';
                }
            }
        });
    });
});

    </script>

</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="#products">Products</a></li>
                <li><a href="#customers">Customers</a></li>
                <li><a href="#users">Users</a></li>
                <li><a href="#contact">Contact FAQ</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </div>
        
        <div class="main-content">
            <h2>Welcome, Admin</h2>
            
            <div id="products" class="card" style="display: none;">
                <h3>Products</h3>
                <!-- Add content for products section -->
                <form action="adminProductHandler.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="p_name" placeholder="Product Name" required> <br> <br>
                    <select name="p_type" required>
                        <option value="">Select Product Type</option>
                        <option value="new-arrival">New Arrival</option>
                        <option value="latest-fashion">Latest Fashion</option>
                    </select><br><br>
                    <input type="number" name="price" placeholder="Price" required> <br><br>
                    <textarea name="description" cols="30" rows="10" placeholder="Description" required></textarea><br><br>
                    <label for="">Picture</label><br>
                    <input type="file" name="picture" placeholder="picture" placeholder="picture" required> <br><br>
                    <input type="submit" value="Add Product" style="background-color: green; color: white; padding: 10px 20px;border: none;">
                </form>
                <br><br>
                <h1>Product Details</h1>

                <?php
                    $sql = "SELECT * FROM product";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<style>";
                    echo "table { border-collapse: collapse; margin-bottom: 40px; }";
                    echo "th, td { padding: 20px; }";
                    echo "</style>";

                    echo "<table>";
                    echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Type</th><th>Price</th><th>Description></th><th>Picture</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['p_id'] . "</td>";
                        echo "<td>" . $row['p_name'] . "</td>";
                        echo "<td>" . $row['p_type'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><img width='150px' height=''150px' src='images/products/" . $row['picture']. "'></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    } else {
                    echo "Contact FAQ not found.";
                    }
                ?>
            </div>
            
            <div id="customers" class="card" style="display: none;">
                <h3>Customers</h3>
                <!-- Add content for customers section -->
                <?php
                    $sql = "SELECT * FROM customer";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<style>";
                    echo "table { border-collapse: collapse; margin-bottom: 40px; }";
                    echo "th, td { padding: 20px; }";
                    echo "</style>";

                    echo "<table>";
                    echo "<tr><th>Full Name</th><th>Email</th><th>Password</th><th>Phone></th><th>Action</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['fullname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td><form action='adminCustomerHandler.php' method='post'><input type='hidden' name='email' value='" . $row['email'] . "'><input type='submit' value='Delete' style='background-color: red; padding: 10px 15px; border: none;font-weight: bold;color: white;'></form></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    } else {
                    echo "Contact FAQ not found.";
                    }

                ?>
            </div>
            
            <div id="users" class="card" style="display: none;">
                <h3>Users</h3>
                <!-- Add content for users section -->
                <?php
                    $sql = "SELECT * FROM user_logs";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<style>";
                    echo "table { border-collapse: collapse; margin-bottom: 40px; }";
                    echo "th, td { padding: 20px; }";
                    echo "</style>";

                    echo "<table>";
                    echo "<tr><th>Username</th><th>Password</th><th>User Group</th></tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['user_group'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    } else {
                    echo "Contact FAQ not found.";
                    }

                ?>
            </div>
            
            <div id="contact" class="card" style="display: none;">
                <h3>Contact FAQ</h3>
                <!-- Add content for contact categories section -->
                <?php

                    $sql = "SELECT * FROM contact";
                    $result = $mysqli->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<style>";
                    echo "table { border-collapse: collapse; margin-bottom: 40px; }";
                    echo "th, td { padding: 20px; }";
                    echo "</style>";

                    echo "<table>";
                    echo "<tr><th>Contact ID</th><th>Full Name</th><th>Email</th><th>Message</th><th>Action</th></tr>";
                    
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['contact_id'] . "</td>";
                        echo "<td>" . $row['fullname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td><form action='adminContactHandler.php' method='post'><input type='hidden' name='contact_id' value='" . $row['contact_id'] . "'><input type='submit' value='Delete' style='background-color: red; padding: 10px 15px; border: none;font-weight: bold;color: white;'></form></td>";

                        echo "</tr>";
                    }
                    
                    echo "</table>";
                    } else {
                    echo "Contact FAQ not found.";
                    }

                ?>
            </div>
        </div>
    </div>
</body>
</html>
