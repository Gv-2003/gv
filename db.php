<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'gvfashion');
    $table = "CREATE TABLE IF NOT EXISTS shirt(
        id INT(3) PRIMARY KEY AUTO_INCREMENT,
        shirt_brand VARCHAR(25),
        shirt_size VARCHAR(25),
        shirt_price INT(4),
        shirt_image VARCHAR(25),
        add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $table);

    $table = "CREATE TABLE IF NOT EXISTS pent(
        id INT(3) PRIMARY KEY AUTO_INCREMENT,
        pent_brand VARCHAR(25),
        pent_size VARCHAR(25),
        pent_price INT(4),
        pent_image VARCHAR(25),
        add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $table);

    $table = "CREATE TABLE IF NOT EXISTS tshirt(
        id INT(3) PRIMARY KEY AUTO_INCREMENT,
        tshirt_brand VARCHAR(25),
        tshirt_size VARCHAR(25),
        tshirt_price INT(4),
        tshirt_image VARCHAR(25),
        add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $table);
?>