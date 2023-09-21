<?php
    include './db.php';
    $tshirt_id = $_POST['tshirt_id'];
    $email = $_POST['email'];
    $data = array();

    $query = "SELECT id FROM users WHERE email='$email'";
    $result = mysqli_fetch_array(mysqli_query($conn, $query));

    $query = "INSERT INTO bought_tshirts (user_id, tshirt_id) VALUES (" . $result['id'] . ", $tshirt_id)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $data['success'] = true;
        $data['message'] = "Thanks For Buying This Product!";
    } else {
        $data['success'] = false;
        $data['errorMessage'] = "$conn->error";
    }
    echo json_encode($data);
    // echo json_encode(["success" => true, "data" => $result]);
?>
