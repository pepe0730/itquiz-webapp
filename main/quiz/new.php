<?php
  include("../../filter/loginCheckFilter.php");
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
  <link rel="stylesheet" href="../../css/style.css">
  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b24292ab52.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include("../../layout/header.php"); ?>
  <div class="main">
    <div class="container text-center">
      <div class="toppage-content">
        <h1 id="toppage-heading">IT => IN/OUT</h1>
        <p>〜IT用語専門学習ツール〜</p>
      </div>
      <form class="form-wrapper" action="create.php" method="post">
        <h2>問題作成</h2>
        <div class="input-area">
          <label for="question">問題文</label>
          <textarea name="question" cols="30" rows="10"></textarea>
        </div>
        <div class="input-area">
          <label for="choices-1">選択肢1</label>
          <input type="text" name="choices-1">
        </div>
        <div class="input-area">
          <label for="choices-2">選択肢2</label>
          <input type="text" name="choices-2">
        </div>
        <div class="input-area">
          <label for="choices-3">選択肢3</label>
          <input type="text" name="choices-3">
        </div>
        <div class="input-area">
          <label for="choices-4">選択肢4</label>
          <input type="text" name="choices-4">
        </div>
        <div class="input-area">
          <label for="answer">答え</label>
          <input type="text" name="answer" placeholder="答えの選択肢をここにコピペ">
        </div>
        <?php
          if($login_user['authority'] == 1) {
            echo <<<EOM
            <div class="input-area">
              <label for="disclosure_flag">ユーザ権限</label>
              <select name="disclosure_flag">
                <option value="0">プライベート問題</option>
                <option value="1">一般公開</option>
              </select>
            </div>
            EOM;
          } else {
            echo '<input type="hidden" name="disclosure_flag" value="0">';
          }
        ?>
        <button type="submit">問題を作成</button>
      </form>
    </div>
  </div>
  <?php include("../../layout/footer.php"); ?>
</body>
</html>
