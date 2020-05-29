<?php include('dbconn.php');

  $user_id = $_SESSION['ss_user_id'];
  $music_id = $_POST['most-music-id'];

  $sql = "update like_list set count=1 where u_id='$user_id' and m_id='$music_id'";
  $rst = mysqli_query($conn, $sql);

  echo "<script>alert('included to most like list');</script>";
  echo "<script>location.replace('mypage.php');</script>";
?>
