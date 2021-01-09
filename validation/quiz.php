<?php
  $validation;
  if($question == null) {
    echo "機能しています";
    $validation[] = "問題文を入力してください";
  }
  if($choices_1 == null) {
    $validation[] = "選択肢1を入力してください";
  }
  if($choices_2 == null) {
    $validation[] = "選択肢2を入力してください";
  }
  if($choices_3 == null) {
    $validation[] = "選択肢3を入力してください";
  }
  if($choices_4 == null) {
    $validation[] = "選択肢4を入力してください";
  }
  if($correct == null) {
    $validation[] = "答えを入力してください";
  }
  if($correct != $choices_1 && $correct != $choices_2 && $correct != $choices_3 && $correct != $choices_4) {
    $validation[] = "答えが選択肢のなかにありません";
  }

  if (isset($validation)) {
    session_start();
    $_SESSION['validation'] = $validation;
    $_SESSION['flash']['message'] = "登録に失敗しました";
    $_SESSION['flash']['type'] = "flash_faile"; 
    header('Location:'.$_SERVER['HTTP_REFERER'].'');
    exit();
  }
?>