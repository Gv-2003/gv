<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM feedbacks");

    $response = "<ul class='list-group'>";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item fs-1 record' data-record-id='". $row[0] ."' data-record-type='feedback'>Feedback Message: " . $row['feedback_message'] 
        ."<div><a href='#' class='btn btn-danger delete-btn mx-3'>Delete</a></div>"
        . "</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>