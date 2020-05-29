<?php
  include("dbconn.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Sign Up
    </title>
  </head>
  <body>
    <div class="register-header">
      <h1>
        Sign Up
      </h1>
    </div>
    <div class="register-section">
      <form class="register-form" action="register.php" method="post">
        <table>
          <tr>
            <td>User ID</td>
            <td><input type="text" name="new-id" value="ID"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="new-pw" value="pw"> </td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="new-email" value="email"> </td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              <input id="gender" type="checkbox" name="new-male" value="male" onclick="checking(this);"> Male <br>
              <input id="gender" type="checkbox" name="new-female" value="female" onclick="checking(this);">Female <br>
            </td>
          </tr>
        </table>
        <input type="submit" name="submit" value="ok">
      </form>
    </div>
    <script type="text/javascript">
      function checking(x) {
        let box = document.getElementsById("gender");
        for(let i=0; i<box.length; i++){
          if(box[i] != x){
              box[i].checked = false;
            }
          }
        };
    </script>
  </body>
</html>
