<?php
include('dbconn.php');
$user_id = $_SESSION['ss_user_id'];
$music_id = $_POST['down-id'];

$sql_license = "select * from user where u_id='$user_id'";
$rst_license = mysqli_query($conn, $sql_license);
$license = mysqli_fetch_assoc($rst_license);

if($license['license']=='manager'){
  echo "<script>alert('manager cannot include songs to the list');</script>";
  echo "<script>location.replace('music_main.php');</script>";
}
else{

  $sql_mem = "select card from membership where u_id='$user_id'";
  $rst_mem = mysqli_query($conn, $sql_mem);
  $membership = mysqli_num_rows($rst_mem);

  if($membership==0){
    echo "<script>alert('buy membership first');</script>";
    echo "<script>location.replace('music_main.php');</script>";
  }
  else {
    $sql_exist = "select * from download_list where u_id='$user_id' and m_id='$music_id'";
    $rst_exist = mysqli_query($conn, $sql_exist);
    $exist = mysqli_num_rows($rst_exist);

    if(!$exist){

      $sql_order = "select down_order from download_list where u_id='$user_id' order by down_order asc";
      $rst_order = mysqli_query($conn, $sql_order);
      $order = 1 + mysqli_num_rows($rst_order);

      $sql = "insert into download_list values('$user_id', '$music_id', $order)";
      $rst = mysqli_query($conn, $sql);

      echo "<script>alert('Included');</script>";
      echo "<script>location.replace('music_main.php');</script>";
    }
    else {
      echo "<script>alert('already included');</script>";
      echo "<script>location.replace('music_main.php');</script>";
    }
  }
}
mysqli_close($conn);
?>
