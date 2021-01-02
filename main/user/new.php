<?php
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
  <link rel="stylesheet" href="../../../css/style.css">
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
      <form class="create-user" action="create.php" method="post">
        <h2>会員新規登録</h2>
        <div class="input-area">
          <label for="code">ユーザーネーム</label>
          <input type="text" name="name">
        </div>
        <div class="input-area">
          <label for="email">メールアドレス</label>
          <input type="text" name="emmail" placeholder="重複不可">
        </div>
        <div class="input-area">
          <label for="password">パスワード</label>
          <input type="text" name="password">
        </div>
        <div class="input-area">
          <label for="authority">ユーザ権限</label>
          <select name="authority">
            <option value="0">ユーザ</option>
            <option value="1">管理者</option>
          </select>
        </div>
        <button type="submit">新規登録</button>
      </form>
    </div>
  </div>
  <?php include("../../layout/footer.php"); ?>
</body>
</html>
