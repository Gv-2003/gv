<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM pent");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="pent.css">
    <link rel="stylesheet" href="style.css"> 
    <title>Pants</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" defer></script>
</head>

<body>
    <header>
        <?php include "components/header.php" ?>
    </header>
                    <?php
                    $query = '';
                    $single_pent_record = null;
                    if (isset($_GET['pent_id'])) {
                        $query = "SELECT * FROM pent WHERE id=" . $_GET['id'];
                        $single_pent_record = mysqli_fetch_array(mysqli_query($conn, $query));
                    }
                    ?>
    <div class="products">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="card" style="width: 18rem;">
                <img src="gvphoto/<?php echo $row['pent_image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p>Brand: <?php echo $row['pent_brand'] ?></p>
                    <p>Price: $<?php echo $row['pent_price'] ?></p>
                    <p>Size: <?php echo $row['pent_size'] ?></p>
                    <a href="view_pant.php?pent_id=<?php echo $row[0] ?>" class="btn btn-primary">See Details</a>
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