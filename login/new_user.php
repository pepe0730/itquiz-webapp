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
      <div class="toppage-content">
        <h1 id="toppage-heading">IT => IN/OUT</h1>
        <p>〜IT用語専門学習ツール〜</p>
      </div>
      <form class="form-wrapper" action="new_user_create.php" method="post">
        <h2>ユーザ新規登録</h2>
        <div class="input-area">
          <label for="code">ユーザーネーム</label>
          <input type="text" name="name">
        </div>
        <div class="input-area">
          <label for="email">メールアドレス</label>
          <input type="text" name="email" placeholder="重複不可">
        </div>
        <div class="input-area">
          <label for="password">パスワード</label>
          <input type="text" name="password">
        </div>
        <input type="hidden" name="authority" value="0">
        <button type="submit">新規登録</button>
      </form>
    </div>
  </div>
  <?php include("../layout/footer.php"); ?>
</body>
</html>
