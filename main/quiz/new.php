<?php
  include("../../filter/loginCheckFilter.php");
  include("../../filter/flashCheckFilter.php");
  include("../../filter/validationCheckFilter.php");
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
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b24292ab52.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    
    const tagList = {
    "english": ["ネットワーク", "IT基礎", "プログラミング言語"],
    "word": ["ネットワーク", "IT基礎", "フロントエンド"],
    "syntax": ["HTML","SQL", "Java", "PHP"]
  };
  function createTag(selectGenre) {
    let tags = document.getElementById('tag');
    tags.disabled = false;
    tags.innerHTML = '';
    let option = document.createElement('option');
    option.innerHTML = 'タグを選択してください';
    option.defaultSelected = true;
    option.disabled = true;
    tags.appendChild(option);

    tagList[selectGenre].forEach( tag => {
      let option = document.createElement('option');
      option.innerHTML = tag;
      option.setAttribute('value', '' + tag + '');
      tags.appendChild(option);  
    });    
  }
</script>
</head>
<body>
  <?php include("../../layout/header.php"); ?>
  <div class="main">
    <div class="container text-center">
      <?php
        if (isset($flash_message)) {
          echo '<div class="flash '.$flash_type.'">';
          echo '<p class="mb-2">'.$flash_message.'</p>';
          if(isset($validation)) {
            for($i = 0; $i < count($validation); $i++) {
              echo '<p class="mb-2">'.$validation[$i].'</p>';
            }
          }
          echo '</div>';
        }
      ?>
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
          <label for="choices_1">選択肢1</label>
          <input type="text" name="choices_1">
        </div>
        <div class="input-area">
          <label for="choices_2">選択肢2</label>
          <input type="text" name="choices_2">
        </div>
        <div class="input-area">
          <label for="choices_3">選択肢3</label>
          <input type="text" name="choices_3">
        </div>
        <div class="input-area">
          <label for="choices_4">選択肢4</label>
          <input type="text" name="choices_4">
        </div>
        <div class="input-area">
          <label for="correct">答え</label>
          <input type="text" name="correct" placeholder="答えの選択肢をここにコピペ">
        </div>
        <div class="input-area">
          <label for="genre">ジャンル</label>
          <select name="genre" onchange="createTag(this.value)">
            <option disabled selected>ジャンルを選択してください</option>
            <option value="english">英単語</option>
            <option value="word">IT用語</option>
            <option value="syntax">書式・文法・構文</option>
          </select>
        </div>
        <div class="input-area">
          <label for="tag">タグ</label>
          <select name="tag" id="tag" disabled>
            <option disabled selected>タグを選択してください</option>
          </select>
          <!-- <select name="tag">
            <option value="IT基礎">IT基礎</option>
            <option value="ネットワーク">ネットワーク</option>
            <option value="Java">Java</option>
            <option value="PHP">PHP</option>
            <option value="SQL">SQL</option>
          </select> -->
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
        <input type="hidden" name="user_id" value="<?php echo $login_user['id'] ?>">
        <button type="submit">問題を作成</button>
      </form>
    </div>
  </div>
  <?php include("../../layout/footer.php"); ?>
</body>
</html>
