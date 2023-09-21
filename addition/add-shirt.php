<?php
    include '../db.php';
    $shirt_brand = $_POST['shirt_brand'];
    $shirt_price = $_POST['shirt_price'];
    $shirt_size = $_POST['shirt_size'];
    $shirt_image_name = $_FILES['shirt_image']['name'];
    $data = array();

    $query = "INSERT INTO shirt (shirt_brand, shirt_price, shirt_size, shirt_image) VALUES ('$shirt_brand', '$shirt_price', '$shirt_size', '$shirt_image_name')";
    if ($conn->query($query)) {
        $data['success'] = true;
        move_uploaded_file($_FILES['shirt_image']['tmp_name'], '../gvphoto/' . $shirt_image_name);
    } else {
        $data['success'] = false;
    }
    echo json_encode($data);
?>