<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $authority = $_POST["authority"];
  include("../connect/connect.php");
  $sql = "insert into user (name,email,password,authority) value ('".$name."','".$email."','".$password."',".$authority.")";
  
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  
  session_start();
  if (!$result) {
    $_SESSION['flash']['message'] = "登録に失敗しました";
    $_SESSION['flash']['type'] = "flash_faile";
  } else {
    $_SESSION['flash']['message'] = "登録に成功しました";
    $_SESSION['flash']['type'] = "flash_success";
  }
  header('Location: index.php');
  exit();
?>