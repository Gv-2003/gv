<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script defer src="./jquery.min.js"></script> -->
</head>
 <button class="send-data">Send Data</button>
 <label class="message"></label>
<body>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.send-data').click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "buy_pant.php",
                data: {
                    pant_id: '4',
                    email: "ab@c.com"
                },
                dataType: "JSON",
                success: function (response) {
                    $('.message').text('See The console for more info.');
                    console.log(response);
                }
            });
        });
    });
</script>

</html>