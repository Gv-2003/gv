<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM tshirt");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="tshirt.css">
    <link rel="stylesheet" href="style.css">
    <title>shirt</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <header>
        <?php include "components/header.php" ?>
    </header>
    <div class="products">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="card" style="width: 18rem;">
                <img src="gvphoto/<?php echo $row['tshirt_image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Brand: <?php echo $row['tshirt_brand'] ?></p>
                    <p>Price: $<?php echo $row['tshirt_price'] ?></p>
                    <p>Size: <?php echo $row['tshirt_size'] ?></p>
                    <a href="view_tshirt.php?tshirt_id=<?php echo $row[0] ?>" class="btn btn-primary">See Details</a>
                </div>
            </div>
        <?php } ?>
    </div>

        <!--contact-section-->
        <section class="contact">
            <div class="contact-info">
                <div class="first-info">
                    <h2>GV FASHION...</h2>
                    <P>giri raj complex, nikol road <br> Ahemdabad</P>
                    <p>1234567890</p>

                    <div class="social-icon">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                        <a href="#"><i class='bx bxl-snapchat'></i></a>
                    </div>
                </div>

                <div class="second-info">
                    <h3>SUPPORT</h3>
                    <a href="./contact.php">Contact us</a><br />
                    <a href="./about.php">About page</a>
                </div>
                <div class="third-info">
                    <h3>ITEMS</h3>
                    <a href="./shirt.php">Shirt</a><br />
                    <a href="./tshirt.php">T-shirt</a><br />
                    <a href="./pent.php">Pent</a>
                </div>
                <div class="fourth-info">
                    <h3>COMPANY</h3>
                    <a href="./about.php">About</a><br />
                    <a href="./login.htm">Login</a>
                </div>
            </div>
        </section>

        <script src="java.js"></script>
</body>

</html>