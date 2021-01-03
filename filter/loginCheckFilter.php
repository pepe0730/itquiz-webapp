<?php
session_start();
$login_user = $_SESSION["login_user"];
if (empty($login_user)) {
  header('Location: ../login/index.php');
}

?>