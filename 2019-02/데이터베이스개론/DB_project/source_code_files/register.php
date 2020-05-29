<?php
  include("dbconn.php");

$will_id = trim($_POST['new-id']);
$will_pw = trim($_POST['new-pw']);
$will_em = trim($_POST['new-email']);
$will_ma = trim($_POST['new-male']);
$will_fe = trim($_POST['new-female']);

if(!$will_id||!$will_pw||!$will_em||(!$will_ma&&!$will_fe)){
  echo "<script>alert('Please fill in the blanks');</script>";
  echo "<script>location.replace('sign_up.php');</script>;";
  exit;
}

if($will_ma){
  $sql_new = "insert into user values ('$will_id', '$will_pw', '$will_em', '$will_ma', 'general')";
}
else if($will_fe){
  $sql_new = "insert into user values ('$will_id', '$will_pw', '$will_em', '$will_fe', 'general')";
}
$rst = mysqli_query($conn, $sql_new);

echo "<script>alert('sign up')</script>";
echo "<script>location.replace('login.php')</script>";
