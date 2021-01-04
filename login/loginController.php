<?php
  include("../connect/connect.php");
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sql = "select * from user where email = '".$email."'and password = '".$password."'";
  $result = mysqli_query($db,$sql);
  $user = mysqli_fetch_assoc($result);

  mysqli_close($db);
  if (!$user) {
    session_start();
    $_SESSION['flash']['message'] = "ログインに失敗しました";
    $_SESSION['flash']['type'] = "flash_faile";
    header('Location: index.php');
  } else {
    session_start();
    $_SESSION["login_user"] = $user;
    $_SESSION['flash']['message'] = "ログインに成功しました";
    $_SESSION['flash']['type'] = "flash_success";
    header('Location: ../main/index.php');
  }
?>