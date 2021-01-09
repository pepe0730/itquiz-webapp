<?php
  include("../../filter/loginCheckFilter.php");
  $quiz = $_SESSION['now_quiz'];
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
  <div class="container">
    <div class="mt-5 mb-3 p-5 question_area">
      <div class="mb-5 question">
        <h5 class="mb-3 text-success text-left"><i class="fas fa-check-square"></i> Question</h5>
        <p><?php echo $_SESSION['now_quiz']['question'] ?></p>
      </div>
      <div clss="answers">
        <p>① <?php echo $_SESSION['now_quiz']['choices_1']; ?></p>
        <p>② <?php echo $_SESSION['now_quiz']['choices_2']; ?></p>
        <p>③ <?php echo $_SESSION['now_quiz']['choices_3']; ?></p>
        <p>④ <?php echo $_SESSION['now_quiz']['choices_4']; ?></p>
      </div>
      
    </div>
    <div class="d-flex button-wrapper">
      <button type="button">①</button>
      <button type="button">②</button>
      <button type="button">③</button>
      <button type="button">④</button>
    </div>
  </div>
  <div class="modal-wrapper" id="correct-answer">
    <div id="modal" class="text-center">
      <h4 class="mb-3">正解</h4>
      <p>答えは「<?php echo $_SESSION['now_quiz']['correct']; ?>」</p>
      <form action="controller.php" method="post">
        <input type="hidden" name="correct_count" value=1>
        <button type="submit">次の問題</button>
      </form>
    </div>
  </div>
  <div class="modal-wrapper" id="incorrect-answer">
    <div id="modal" class="text-center">
      <h4 class="mb-3">不正解</h4>
      <p>答えは「<?php echo $_SESSION['now_quiz']['correct']; ?>」</p>
      <form action="controller.php" method="post">
        <button type="submit">次の問題</button>
      </form>
    </div>
  </div>
  
  <?php include("../../layout/footer.php"); ?>

  <script type="text/javascript">
  window.onload = function(){
    const correct = "<?php echo $_SESSION['now_quiz']['correct'] ?>";
    const $button = document.getElementsByTagName('button');
    var button_text = [
                            "<?php echo $_SESSION['now_quiz']['choices_1']; ?>", 
                            "<?php echo $_SESSION['now_quiz']['choices_2']; ?>",
                            "<?php echo $_SESSION['now_quiz']['choices_3']; ?>",
                            "<?php echo $_SESSION['now_quiz']['choices_4']; ?>"
                            ];
    let buttonLength = $button.length;
    let i = 0;


    $button[0].addEventListener('click', () => {
      if (correct === button_text[0]) {
          $('#correct-answer').fadeIn();
        } else {
          $('#incorrect-answer').fadeIn();
        }
    });
    $button[1].addEventListener('click', () => {
      if (correct === button_text[1]) {
        $('#correct-answer').fadeIn();
        } else {
          $('#incorrect-answer').fadeIn();
        }
    });
    $button[2].addEventListener('click', () => {
      if (correct === button_text[2]) {
        $('#correct-answer').fadeIn();
        } else {
          $('#incorrect-answer').fadeIn();
        }
    });
    $button[3].addEventListener('click', () => {
      if (correct === button_text[3]) {
        $('#correct-answer').fadeIn();
        } else {
          $('#incorrect-answer').fadeIn();
        }
    });
  };
  </script>
</body>
</html>