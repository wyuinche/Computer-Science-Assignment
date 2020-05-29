<?php
  session_start();
  session_unset();
  session_destroy();

  if(!isset($_SESSION['ss_user_id']))
  {
    echo "<script>alert('sign out');</script>";
    echo "<script>location.replace('login.php');</script>";
  }
 ?>
