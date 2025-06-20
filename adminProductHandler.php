<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'db_connection.php';
    
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