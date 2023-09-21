<header>
    <h1> <i class="logo">!!GV!!<span>FASHION </span></i></h1>
    <ul class="navmenu">
        <li><a href="index1.php">HOME</a></li>
        <li><a href="shirt.php">SHIRT</a></li>
        <li><a href="tshirt.php">T-SHIRT</a></li>
        <li><a href="pent.php">PENT</a></li>
        <li><a href="about.php">About US</a></li> 
        <li><a href="contact.php">Contact</a></li>
        <?php if(!isset($_SESSION['login'])){?>
            <li><a href="login.htm">Login/Signup</a></li>
        <?php } else { ?>
            <li><span><a href="signout.php">signout</a></li>
        <?php } ?>
        
    </ul>
</header> 