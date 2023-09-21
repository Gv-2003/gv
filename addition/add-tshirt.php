<?php
    include '../db.php';
    $tshirt_brand = $_POST['tshirt_brand'];
    $tshirt_price = $_POST['tshirt_price'];
    $tshirt_size = $_POST['tshirt_size'];
    $tshirt_image_name = $_FILES['image']['name'];
    $data = array();

    $query = "INSERT INTO tshirt (tshirt_brand, tshirt_price, tshirt_size, tshirt_image) VALUES ('$tshirt_brand', '$tshirt_price', '$tshirt_size', '$tshirt_image_name')";
    if ($conn->query($query)) {
        $data['success'] = true;
        move_uploaded_file($_FILES['image']['tmp_name'], '../gvphoto/' . $tshirt_image_name);
    } else {
        $data['success'] = false;
    }
    echo json_encode($data);

    
    ?>