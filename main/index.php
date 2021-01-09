<?php
  include("../filter/loginCheckFilter.php");
  include("../filter/flashCheckFilter.php");
  unset($_SESSION['quiz_list'], $_SESSION['quiz_index'], $_SESSION['now_quiz'], $_SESSION['correct_count'], $_SESSION['quiz_length']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IN/OUT</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="../js/modal.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b24292ab52.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include("../layout/header.php"); ?>
  <div class="main">
    <div class="container text-center">
    <?php
        if (isset($flash_message)) {
          echo '<p class="flash '.$flash_type.'">'.$flash_message.'</p>';
        }
      ?>
      <div class="toppage-content">
        <h1 id="toppage-heading">IT => IN/OUT</h1>
        <p>〜IT用語専門学習ツール〜</p>
      </div>
      <div class="btn-wrapper">
        <ul>
          <li><a id="modal-btn-1" href="#">IT英単語</a></li>
          <li><a id="modal-btn-2" href="#">IT用語</a></li>
          <li><a id="modal-btn-3" href="#">構文・関数</a></li>
          <li><a href="quiz/new.php">問題を作成する</a></li>
        </ul>
      </div>
    </div>
    <?php 
        include("../layout/modal-1.php");
        include("../layout/modal-2.php");
        include("../layout/modal-3.php");
    ?>
  </div>
  <?php include("../layout/footer.php"); ?>
</body>
</html>
