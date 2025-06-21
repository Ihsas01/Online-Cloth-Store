<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';
    
    // Check if it's a delete action
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $p_id = $_POST['p_id'];
        
        // Get the current picture filename to delete it
        $sql_get_picture = "SELECT picture FROM product WHERE p_id = $p_id";
        $result_picture = $mysqli->query($sql_get_picture);
        if ($result_picture && $result_picture->num_rows > 0) {
            $row = $result_picture->fetch_assoc();
            $picture_file = $row['picture'];
            
            // Delete the picture file if it exists
            if ($picture_file && file_exists("images/products/" . $picture_file)) {
                unlink("images/products/" . $picture_file);
            }
        }
        
        // Delete the product from database
        $sql_delete = "DELETE FROM product WHERE p_id = $p_id";
        $result_delete = $mysqli->query($sql_delete);
        
        if ($result_delete) {
            echo "<script>alert('Product Successfully Deleted');</script>";
        } else {
            echo "<script>alert('Product Deletion Failed');</script>";
        }
        echo "<script>window.location.href = 'dashboard.php';</script>";
        exit();
    }
    
    // Check if it's an edit action
    if (isset($_POST['action']) && $_POST['action'] === 'edit') {
        $p_id = $_POST['p_id'];
        $p_name = $_POST['p_name'];
        $p_type = $_POST['p_type'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        
        // Update product information
        $sql_update = "UPDATE product SET p_name = '$p_name', p_type = '$p_type', price = '$price', description = '$description' WHERE p_id = $p_id";
        $result_update = $mysqli->query($sql_update);
        
        if ($result_update) {
            // Handle new picture upload if provided
            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                $filename = $_FILES['picture']['tmp_name'];
                $destination = $p_id . "_" . $_FILES['picture']['name'];
                
                // Delete old picture if exists
                $sql_get_old_picture = "SELECT picture FROM product WHERE p_id = $p_id";
                $result_old_picture = $mysqli->query($sql_get_old_picture);
                if ($result_old_picture && $result_old_picture->num_rows > 0) {
                    $row = $result_old_picture->fetch_assoc();
                    $old_picture = $row['picture'];
                    if ($old_picture && file_exists("images/products/" . $old_picture)) {
                        unlink("images/products/" . $old_picture);
                    }
                }
                
                // Upload new picture
                $result_upload = move_uploaded_file($filename, "images/products/" . $destination);
                if ($result_upload) {
                    $sql_update_picture = "UPDATE product SET picture = '$destination' WHERE p_id = $p_id";
                    $mysqli->query($sql_update_picture);
                }
            }
            
            echo "<script>alert('Product Successfully Updated');</script>";
        } else {
            echo "<script>alert('Product Update Failed');</script>";
        }
        echo "<script>window.location.href = 'dashboard.php';</script>";
        exit();
    }
    
    // Original add product functionality
    $p_name       = $_POST['p_name'];
    $p_type       = $_POST['p_type'];
    $price        = $_POST['price'];
    $description  = $_POST['description'];
    
    $sql = "INSERT INTO product (p_name, p_type, price, description) VALUES ('$p_name', '$p_type', '$price', '$description') ";


    $result = $mysqli->query($sql);

    if ($result) {
        
        if ($_FILES['picture']['error'] == 0) {
            $last_id     = $mysqli->insert_id;
            $filename    = $_FILES['picture']['tmp_name'];
            $destination = $last_id . "_" . $_FILES['picture']['name'];

            $result2 = move_uploaded_file($filename,"images/products/".$destination);
            if ($result2 > 0) {
                $sql2 = "update product set picture = '$destination' where p_id = $last_id";
                $result3 = $mysqli->query($sql2);
                echo "<script>alert('Product Successfully Added');</script>";
                echo "<script>window.location.href = 'dashboard.php';</script>";
            }
        }

    } else {
      echo "<script>alert('Product Adding Failed');</script>";
      echo "<script>window.location.href = 'dashboard.php';</script>";
    }
    
  }