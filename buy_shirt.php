<?php
    include './db.php';
    $shirt_id = $_POST['shirt_id'];
    $email = $_POST['email'];
    $data = array();

    $query = "SELECT id FROM users WHERE email='$email'";
    $result = mysqli_fetch_array(mysqli_query($conn, $query));

    $query = "INSERT INTO bought_shirts (user_id, shirt_id) VALUES (" . $result['id'] . ", $shirt_id)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $data['success'] = true;
        $data['message'] = "Thanks For Buying This Product!";
    } else {
        $data['success'] = false;
        $data['errorMessage'] = $conn->error;
    }
    echo json_encode($data);
?>