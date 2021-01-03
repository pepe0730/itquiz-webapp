<?php
  session_start();
  unset($_SESSION["login_user"]);
  include("../filter/flashCheckFilter.php");
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
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b24292ab52.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
  <div class="header-left">
    <h1>IN/OUT</h1>
    <p>~IT quiz app~</p>
  </div>
</header>
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
      <form class="form-wrapper" action="loginController.php" method="post">
        <h2>ログイン</h2>
        <div class="input-area">
          <label for="email">メールアドレス</label>
          <input type="text" name="email">
        </div>
        <div class="input-area">
          <label for="password">パスワード</label>
          <input type="text" name="password">
        </div>
        <button type="submit">ログイン</button>
        <a href="new_user.php" style="color:rgba(110, 0, 225, 0.7)">新規会員登録</a>
      </form>
    </div>
  </div>
  <?php include("../layout/footer.php"); ?>
</body>
</html>
