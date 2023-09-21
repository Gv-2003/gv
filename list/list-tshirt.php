<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM tshirt");

    $response = "<ul class='list-group'>";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item record fs-1' data-record-id='" . $row['id'] . "' data-record-type='t-shirt'>Image: "
            ."<img src='./gvphoto/" . $row['tshirt_image'] . "' height='50' class='me-3' />"
            ."Brand: ".$row['tshirt_brand']
            .", Price: " . $row['tshirt_price']
            ."<a href='#' class='btn btn-danger delete-btn mx-3'>Delete</a>"
        ."</li>";

    }
    $response = $response . "</ul>";

    echo $response;
?>