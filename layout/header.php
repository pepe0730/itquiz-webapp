<header>
  <div class="header-left">
    <h1><a href="http://localhost/inout_webapp/main/">IN/OUT</a></h1>
    <p class="d-none d-md-block">~IT quiz app~</p>
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