<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>!!...GV...!!</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" defer></script>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

</head>

<body>
    <?php include 'components/header.php' ?>
    <section class="main-home">
        <div class="main-text">

            <h1>New GV<br>collection 2023</h1>
            <p>There's Nothing like Trend</p>

        </div>
    </section>
  
    <!--client review section-->
    <section class="client-reviews">
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="fashion/john.jpg" alt="">
            <p>Thank you to everyone at Project Fashion.
                My daughter Ella finished an amazing week in Castleknock which culminated <br> a catwalk fashion
                show where all the dresses were showcased by their creators! Ella loves her dress.
                <br> She is inspired to create more garments & perfect her sewing machine skills.
                Looking forward to to the next camp & she would love a camp for teenagers !
            </p>

            <h2>John Scott</h2>
        </div>
    </section>

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
                <a href="./contact.php">Contact us</a><br/>
                <a href="./about.php">About page</a>
            </div>
            <div class="third-info">
                <h3>ITEMS</h3>
                <a href="./shirt.php">Shirt</a><br/>
                <a href="./tshirt.php">T-shirt</a><br/>
                <a href="./pent.php">Pent</a>
            </div>
            <div class="fourth-info">
                <h3>COMPANY</h3>
                <a href="./about.php">About</a><br/>
                <a href="./login.htm">Login</a>
            </div>
        </div>
    </section>

    <script src="java.js"></script>
</body>

</html>