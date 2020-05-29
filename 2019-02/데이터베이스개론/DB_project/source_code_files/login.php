<?php
  include("dbconn.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php if(!isset($_SESSION['ss_user_id'])) { ?>
      <div class="login-header">
        <h1>WELCOME TO OUR MUSIC SERVICE</h1>
      </div>
      <div class="login-login_handler">
        <h2>Log In</h2>
        <form class="login-personal_information" action="sign_in.php" method="post">
          <input type="text" name="login-id" value="Enter your ID"> <br>
          <input type="password" name="login-password" value="Enter your PW"> <br>
          <input type="submit" name="login-submit" value="SIGN IN">
          <button type="button" name="button"> <a href="sign_up.php">SIGN UP</a> </button>
        </form>
      </div>
    <?php } else {
      $user_id = $_SESSION['ss_user_id'];
      $sql = "select * from user where u_id=TRIM('$user_id')";
      $rst = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($rst);

      mysqli_close($conn);

      if($user['license']=="general"){
        echo("<script>location.replace('music_main.php');</script>");
      }
      else{
        echo("<script>location.replace('mgr_main.php');</script>");
      }
    } ?>
  </body>
</html>
