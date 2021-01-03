<?php
  include("../connect/connect.php");
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = "select * from user where email = '".$email."'and password = '".$password."'";
  $result = mysqli_query($db,$sql);
  $user = mysqli_fetch_assoc($result);

  mysqli_close($db);
  if (!$user) {
    header('Location: index.php');
  } else {
    session_start();
    $_SESSION["login_user"] = $user;
    header('Location: ../main/index.php');
  }
?>