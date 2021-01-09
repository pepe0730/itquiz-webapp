<?php
  include("../../filter/loginCheckFilter.php");
  $id = $_SESSION['id'];
  $question = $_POST["question"];
  $choices_1 = $_POST["choices_1"];
  $choices_2 = $_POST["choices_2"];
  $choices_3 = $_POST["choices_3"];
  $choices_4 = $_POST["choices_4"];
  $correct= $_POST["correct"];
  $tag = $_POST["tag"];
  $genre = $_POST["genre"];
  $disclosure_flag = $_POST["disclosure_flag"];
  $user_id = $_POST["user_id"];


  // バリデーション
  require("../../validation/quiz.php");


  include("../../connect/connect.php");
  $sql = "update quiz_list set question = '".$question."', choices_1 = '".$choices_1."', choices_2 = '".$choices_2."', choices_3 = '".$choices_3."', choices_4 = '".$choices_4."', correct = '".$correct."', genre = '".$genre."', tag = '".$tag."', disclosure_flag = ".$disclosure_flag.", user_id = ".$user_id." where id = ".$id."";
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  
  if (!$result) {
    $_SESSION['flash']['message'] = "更新に失敗しました";
    $_SESSION['flash']['type'] = "flash_faile"; 
    header('Location: new.php');
  } else {
    $_SESSION['flash']['message'] = "更新に成功しました";
    $_SESSION['flash']['type'] = "flash_success";
    unset($_SESSION['id']);
    header('Location: ../index.php');
  }
  
  exit();
?>