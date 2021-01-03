<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $authority = $_POST["authority"];
  include("../../connect/connect.php");
  $sql = "insert into user (name,email,password,authority) value ('".$name."','".$email."','".$password."',".$authority.")";
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  
  if ($result) {
    header('Location: ../index.php');
    exit();
  } else {
    header('Location: new.php');
    exit(); 
  }
?>