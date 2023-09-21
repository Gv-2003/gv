<?php
require 'db.php';
//if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
  if($password == $row["password"]){
    $_SESSION["login"] = true;
    $_SESSION["email"] = $row["email"];
    if ($row['firstname'] == 'admin') {
      $_SESSION['isadmin'] = true;
      header('location: adminpage.php');
    } else {
      header("location: index1.php");
    }
  }
  else{
    echo
    "<script> alert('Wrong Password');</script>";
    }
  }
    else{
      echo
      "<script> alert('User not Signup');</script>";
    }
  //}
?>





