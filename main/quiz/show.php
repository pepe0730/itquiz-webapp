<?php
  include("../../filter/loginCheckFilter.php");
  include("../../connect/connect.php");
  ini_set('error_reporting', E_ALL & ~E_NOTICE);
  if (!isset($_GET['page'])) {
    $page = 0;
  } else {
    $page = ($_GET['page'] - 1) * 10;
  }
  $sql = "select * from quiz_list where user_id = ".$login_user['id']." limit 10 offset ".$page."";
  $count_sql = "select * from quiz_list where user_id = ".$login_user['id']."";
  $result = mysqli_query($db, $sql);
  $count_result = mysqli_query($db, $count_sql);
  $rows = mysqli_num_rows($result);
  $count = mysqli_num_rows($count_result);
  $i = 0;
  //レコードを配列に変換
  while ($row = mysqli_fetch_assoc($result)) {
    $quiz_list[$i] = $row;
    $i++;
  }
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
  <script src="../js/modal.js"></script>
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
      <div class="show-wrapper">
        <h2 class="mb-5">編集リスト</h2>
        <table class="table table-striped">
        <thead class="thead-dark">
          <tr class="row">
            <th class="col-8">問題文</th>
            <th class="col-4">詳細</th>
          </tr>
        </thead>
          <?php
            for($i = 0; $i < $rows; $i++) {
              echo '<tr class="row">';
              echo '<td class="col-8">'.$quiz_list[$i]['question'].'</td>';
              echo '<td class="col-4"><a href="edit.php?id='.$quiz_list[$i]['id'].'">編集する</a></td>'; 
              echo '</tr>';
            }
          ?>
        </table>
        <?php 
          for($i = 1; $i < $count / 10 + 1 ; $i++) {
            echo '<a href="http://localhost/inout_webapp/main/quiz/show.php?page='.$i.'">'.$i.'</a>&nbsp;';
          }
        ?>
      </div>
    </div>
  </div>
  <?php include("../../layout/footer.php"); ?>
</body>
</html>
