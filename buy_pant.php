<?php
    include './db.php';
    $pant_id = $_POST['pant_id'];
    $email = $_POST['email'];
    $data = array();

    $query = "SELECT id FROM users WHERE email='$email'";
    $result = mysqli_fetch_array(mysqli_query($conn, $query));

    $query = "INSERT INTO bought_pents (user_id, pent_id) VALUES (" . $result['id'] . ", $pant_id)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $data['success'] = true;
        $data['message'] = "Thanks For Buying This Product!";
    } else {
        $data['success'] = false;
        $data['errorMessage'] = "Some Error Occured!";
    }
    echo json_encode($data);
?>