<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM shirt");

    $response = "<ul class='list-group'>";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item record fs-1' data-record-id='" . $row['id'] . "' data-record-type='shirt'>Image: "
            ."<img src='./gvphoto/" . $row['shirt_image'] . "' height='50' class='me-3' />"
            ."Brand: ".$row['shirt_brand']
            .", Price: " . $row['shirt_price']
            ."<a href='#' class='btn btn-danger delete-btn mx-3'>Delete</a>"
        ."</li>";
    }
    $response = $response . "</ul>";

    echo $response;
?>