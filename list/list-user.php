<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM users");

    $response = "<ul class='list-group'>";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item record fs-1' data-record-id='".$row[0] ."' data-record-type='user'>User: " . $row[1] 
        ."<a href='#' class='btn btn-danger delete-btn mx-3'>Delete</a>"
        . "</li>";
 
    }
    $response = $response . "</ul>";

    echo $response;
?>