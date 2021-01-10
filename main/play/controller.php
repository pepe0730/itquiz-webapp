<?php
  include("../../filter/loginCheckFilter.php");
  if (!isset($_SESSION['quiz_list'])) {
    //クイズを10問取得していない場合 
    $tag = $_POST['tag'];
    $number = $_POST['number'];
    $flag = $_POST['flag'];
    $user_id = $login_user['id'];
    $genre = $_POST['genre'];
    if ($flag == 1) {
      $sql = "select * from quiz_list where genre='".$genre."' and tag='".$tag."' and disclosure_flag = ".$flag." order by rand() limit ".$number."";
    } else {
      $sql = "select * from quiz_list where user_id =".$user_id." and genre='".$genre."' and tag='".$tag."' and disclosure_flag = ".$flag." order by rand() limit ".$number."";
    }
    //DB呼び出し クエリ実行
    include('../../connect/connect.php');
    $result = mysqli_query($db, $sql);

    $rows = mysqli_num_rows($result);
    if ($rows == 0) {
      $_SESSION['flash']['message'] = "問題がありませんでした";
      $_SESSION['flash']['type'] = "flash_faile"; 
      header('Location: ../');
      exit;
    }
    //取得してきた問題数
    $_SESSION['quiz_length'] = $rows;
    $i = 0;
    //レコードを配列に変換
    while ($row = mysqli_fetch_assoc($result)) {
      $quiz_list[$i] = $row;
      $i++;
    }
    $_SESSION['quiz_list'] = $quiz_list;
    $quiz_index = 0;
    $_SESSION['quiz_index'] = $quiz_index;
    $_SESSION['correct_count'] = 0;
  } else {
    //取得している場合
    $quiz_index = $_SESSION['quiz_index'];
    $quiz_index++;
    $_SESSION['quiz_index'] = $quiz_index;
    $_SESSION['correct_count'] += $_POST['correct_count'];
  }
  try {
    //前回のクイズの削除 初回はないので例外処理でスキップ
    unset($_SESSION['now_quiz']);
  } catch(Exception $e){}

  //全ての問題を回答した場合
  if($quiz_index == $_SESSION['quiz_length']) {
    unset($_SESSION['quiz_list']);
    unset($_SESSION['quiz_index']);
    unset($_SESSION['now_quiz']); 
    header('Location: result.php');
    exit;
  } else {
    //クイズを1問取得
    $_SESSION['now_quiz'] = $_SESSION['quiz_list'][$quiz_index];
    //取得したクイズはリストから削除
    unset($_SESSION['quiz_list'][$quiz_index]);
    header('Location: index.php');
  }
?>