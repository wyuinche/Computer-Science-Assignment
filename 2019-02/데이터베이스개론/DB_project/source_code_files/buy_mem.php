<?php
include('dbconn.php');

$user_id = $_SESSION['ss_user_id'];
$card_num = $_POST['card-number'];

$sql_exist = "select * from membership where u_id='$user_id'";
$rst_exist = mysqli_query($conn, $sql_exist);
$exist = mysqli_num_rows($rst_exist);

if ($exist != 0)
{
  echo "<script>alert('You already joined in membership');</script>";
  echo "<script>location.replace('music_main.php');</script>";
}
else {
  $sql_card = "insert into membership values('$user_id','$card_num')";
  $rst_card = mysqli_query($conn, $sql_card);
  echo "<script>alert('Start membership');</script>";
  echo "<script>location.replace('music_main.php');</script>";

}
  //insert

?>
