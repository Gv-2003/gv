<?php
    include '../db.php';
    $result = $conn->query("SELECT * FROM pent");

    $response = "<ul class='list-group'>";
    while ($row = $result->fetch_array()) {
        $response = $response
        ."<li class='list-group-item record fs-1' data-record-id='" . $row['id'] . "' data-record-type='pent'>Image: "
            ."<img src='./gvphoto/" . $row['pent_image'] . "' height='50' class='me-3' />"
            ."Brand: ".$row['pent_brand']
            .", Price: " . $row['pent_price']
            ."<a href='#' class='btn btn-danger delete-btn mx-3'>Delete</a>"
        ."</li>";
    } $response = $response . "</ul>";

    echo $response;
?>