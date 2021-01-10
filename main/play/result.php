<?php
  include("../../filter/loginCheckFilter.php");
  $correct_count = $_SESSION['correct_count'];
  $quiz_length = $_SESSION['quiz_length'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IN/OUT</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b24292ab52.js" crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
  <?php include("../../layout/header.php"); ?>
  <div class="container text-center">
    <div class="result-wrapper">
      <h4>Result</h4>
      <p class="my-3">正解数</p>
      <p class="mb-5"><?php echo $correct_count; ?> / <?php echo $quiz_length ?></p>
      <a href="../">トップへ戻る</a>
    </div>
  </div>
  <?php include("../../layout/footer.php"); ?>
</body>
</html>