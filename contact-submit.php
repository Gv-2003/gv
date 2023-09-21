<?php
    $username = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $data = array();
    include './db.php';

    $result = $conn->query("INSERT INTO feedbacks (username, email, feedback_message) VALUES ('$username', '$email', '$message')");
    if ($result) {
        $data['success'] = true;
    } else {
        $data['success'] = false;
    }

    echo json_encode($data);
?>