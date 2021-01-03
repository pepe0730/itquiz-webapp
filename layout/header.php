<header>
  <div class="header-left">
    <h1>IN/OUT</h1>
    <p>~IT quiz app~</p>
  </div>
  <ul>
    <?php
      if($login_user['authority'] == 1) {
        echo '<li><a href="http://localhost/inout_webapp/main/user/new.php">新規登録</a></li>';
      }
    ?>
    <li><a href="http://localhost/inout_webapp/login/">ログアウト</a></li>
  </ul>
</header>