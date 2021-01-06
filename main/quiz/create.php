<?php
  include("../../filter/loginCheckFilter.php");
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
  $sql = "insert into quiz_list (question,choices_1,choices_2,choices_3,choices_4,correct,tag,genre,disclosure_flag,user_id) value ('".$question."','".$choices_1."','".$choices_2."','".$choices_3."','".$choices_4."','".$correct."','".$tag."','".$genre."',".$disclosure_flag.",".$user_id.")";
  
  $result = mysqli_query($db,$sql);
  mysqli_close($db);
  
  if (!$result) {
    $_SESSION['flash']['message'] = "登録に失敗しました";
    $_SESSION['flash']['type'] = "flash_faile"; 
    header('Location: new.php');
  } else {
    $_SESSION['flash']['message'] = "登録に成功しました";
    $_SESSION['flash']['type'] = "flash_success";
    header('Location: ../index.php');
  }
  
  exit();
?>