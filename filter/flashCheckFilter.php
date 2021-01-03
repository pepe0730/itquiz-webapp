<?php
  if( isset($_SESSION['flash']) ){
    $flash_message = $_SESSION['flash']['message'];
    $flash_type = $_SESSION['flash']['type'];
  }
  unset($_SESSION['flash']);
?>
