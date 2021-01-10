<?php
  include("../../filter/loginCheckFilter.php");
  $id = $_SESSION['id'];
  $sql = "delete from quiz_list where id = ".$id."";
  include("../../connect/connect.php");
  $result = mysqli_query($db, $sql);
  mysqli_close($db);

  if (!$result) {
    $_SESSION['flash']['message'] = "削除に失敗しました";
    $_SESSION['flash']['type'] = "flash_faile"; 
    header('Location: edit.php');
  } else {
    $_SESSION['flash']['message'] = "削除に成功しました";
    $_SESSION['flash']['type'] = "flash_success";
    unset($_SESSION['id']);
    header('Location: ../index.php');
  }
?>