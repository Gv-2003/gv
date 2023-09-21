<?php
    session_start();
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['login']);
    header('location: index1.php');
?>