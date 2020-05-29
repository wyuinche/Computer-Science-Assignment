<?php
include('dbconn.php');
$user_id = $_SESSION['ss_user_id'];
$music_id = $_POST['like-id'];

$sql_license = "select * from user where u_id='$user_id'";
$rst_license = mysqli_query($conn, $sql_license);
$license = mysqli_fetch_assoc($rst_license);

if($license['license']=='manager'){
  echo "<script>alert('manager cannot include songs to the list');</script>";
  echo "<script>location.replace('music_main.php');</script>";
}
else{
  $sql_exist = "select * from like_list where u_id='$user_id' and m_id='$music_id'";
  $rst_exist = mysqli_query($conn, $sql_exist);
  $exist = mysqli_num_rows($rst_exist);

  if(!$exist){
    $sql_order = "select like_order from like_list where u_id='$user_id' order by like_order asc";
    $rst_order = mysqli_query($conn, $sql_order);
    $order = 1 + mysqli_num_rows($rst_order);

    $sql = "insert into like_list values('$user_id', '$music_id', $order, 0)";
    $rst = mysqli_query($conn, $sql);

    echo "<script>alert('Included');</script>";
    echo "<script>location.replace('music_main.php');</script>";
  }
  else {
    echo "<script>alert('already included');</script>";
    echo "<script>location.replace('music_main.php');</script>";
  }
}
mysqli_close($conn);
?>
