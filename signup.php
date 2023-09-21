<?php
session_start();
include 'db.php';
// require 'config.php';
//if(isset($_POST["submit"])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $mobile = $_POST["mobile"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $zipcode = $_POST["zipcode"];
  // echo "<br>$email<br>$password<br>$ConfirmPassword";
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Already Taken');</script>";
  }
  else{
    // if($password == $ConfirmPassword){
    $query = "INSERT INTO users(firstname,lastname,email,password,mobile,address,city,zip_code) VALUES('$firstname','$lastname','$email','$password','$mobile','$address','$city','$zipcode')";
    mysqli_query($conn,$query);
    $_SESSION['email'] = $email;
    $_SESSION['login'] = true;
    header("location: index1.php");
    // }
    // else{
    //   echo
    //   "<script> alert('Password does not match');</script>";
    // }
  }
//}
?>



