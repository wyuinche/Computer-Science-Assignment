<?php
  include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Music</title>
  </head>
  <body>
    <div class="add-header">
        <div class="add-title">
          <h1>Add Music</h1>
        </div>
        <div class="music-nav">
          <?php
            $user_id = $_SESSION['ss_user_id'];
          ?>
          <p>Hello, <?php echo $user_id?></p>
          <button id='mypage' type="button" name="button"><a href="mypage.php">My Page</a></button>
          <button id='signout' type="button" name="button"><a href="sign_out.php">Sign Out</a></button>
          <button id='musiclist' type="button" name="button"><a href="music_main.php">Music List</a></button>

        </div>
    </div>
    <div class="add-section">
      <form class="add-form" action="add.php" method="post">
        <table>
          <tr>
            <td>Album Title</td>
            <td><input type="text" name="new-album" value=""></td>
          </tr>
          <tr>
            <td>Album Number</td>
            <td><input type="text" name="new-album-n" value=""></td>
          </tr>
          <tr>
            <td>Song Title</td>
            <td><input type="text" name="new-song" value=""> </td>
          </tr>
          <tr>
            <td>Artist</td>
            <td><input type="text" name="new-artist" value=""> </td>
          </tr>
          <tr>
            <td>Artist Number</td>
            <td><input type="text" name="new-artist-n" value=""></td>
          </tr>
          <tr>
            <td>Composer</td>
            <td><input type="text" name="new-composer" value=""> </td>
          </tr>
          <tr>
            <td>Lyricist</td>
            <td><input type="text" name="new-lyricist" value=""> </td>
          </tr>
          <tr>
            <td>Released Date</td>
            <td><input type="text" name="new-date" value=""> </td>
          </tr>
          <tr>
            <td>Genre</td>
            <td><input type="text" name="new-genre" value=""> </td>
          </tr>
        </table>
        <input type="submit" name="submit" value="ok">
      </form>
    </div>
    <?php mysqli_close($conn); ?>
  </body>
</html>
