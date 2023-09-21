<?php
include 'db.php';
$email=null;
if (isset($_SESSION['email'])){
    $email=$_SESSION['email'];
}
$query = '';
$single_pent_record = null;
if (isset($_GET['shirt_id'])) {
    $query = "SELECT * FROM shirt WHERE id=" . $_GET['shirt_id'];
    $single_shirt_record = mysqli_fetch_array(mysqli_query($conn, $query));
}
?>
<html>

<head>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="./style.css">
    <title>shirt Details</title>
    <style>
        .details {
            display: flex;
            gap: 30px;
        }

        .details div p {
            font-size: large;
        }

        .details div hr {
            margin-top: 100%;
        }

        .details div:last-child {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <?php include 'components/header.php' ?>

    <div class="container">
        <div class="details" style="padding-top: 4rem;">
            <div>
                <img src="gvphoto/<?php echo $single_shirt_record['shirt_image'] ?>" height="450" alt="">
            </div>
            <div style="height: 450px;">
                <p>shirt Brand: <?php echo $single_shirt_record['shirt_brand'] ?></p>
                <p>shirt Price: <?php echo $single_shirt_record['shirt_price'] ?></p>
                <p>shirt Size: <?php echo $single_shirt_record['shirt_size'] ?></p>
                <hr />
                <button type="button" class="btn btn-primary buy-btn w-100" <?php echo isset($_SESSION['login']) ? '' : 'disabled' ?>>Buy</button>
            </div>
        </div>
    </div>
    <script src="java.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.buy-btn').click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "buy_shirt.php",
                data: {
                    shirt_id: "<?php echo $single_shirt_record['id'] ?>",
                    email: "<?php echo $email?>"
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                    } else {
                        alert(response.errorMessage);
                        console.log(response.errorMessage)
                    }
                }
            });
        });
    });
</script>

</html>