<?php
    $conn = new mysqli("localhost", "root", "", "gvfashion");
    for ($i = 1; $i <= 16; $i++) {
        $sql = "INSERT INTO tshirt(tshirt_brand, tshirt_price, tshirt_size, tshirt_image) VALUES ('abc', 300, 'xxl', 'tshirt$i.jpg')";
        $conn->query($sql);
    }
?>