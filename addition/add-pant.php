<?php
    include '../db.php';
    $pant_brand = $_POST['pant_brand'];
    $pant_price = $_POST['pant_price'];
    $pant_size = $_POST['pant_size'];
    $pant_image_name = $_FILES['pant_image']['name'];
     $data = array();

     $query = "INSERT INTO pent (pent_brand, pent_price, pent_size, pent_image) VALUES ('$pent_brand', '$pent_price', '$pent_size', '$pent_image_name')";
     if ($conn->query($query)) {
         $data['success'] = true;
         move_uploaded_file($_FILES['pent_image']['tmp_name'], '../gvphoto/' . $pent_image_name);
     } else {
         $data['success'] = false;
         $data['message'] = $conn->error;
     }
     echo json_encode($data);
 

    ?>