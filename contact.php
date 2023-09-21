<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact us Page</title>
</head>
 
<body>
    <!-- Contact form -->
    <section class="contact-form">
        <div class="form-container">
            <h2>YOUR DETAILS</h2>
            <form class="form" method="POST">
 
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
 
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message: </label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </section>

    <!-- Company contact info -->
    <section class="contact-info">
        <h2>Contact Information</h2>
        <address>
            Phone: <a href="tel:1234567890">123-456-7890</a><br>
            Email: <a href="gvinfo@example.com">gv@example.com</a>
        </address>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $('.form').submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "./contact-submit.php",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (response) {
                if (response['success']) {
                    location.href = 'index1.php'
                }            }
        });
    });
</script>
</html>