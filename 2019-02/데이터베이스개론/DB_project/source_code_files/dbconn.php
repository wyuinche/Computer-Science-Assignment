<?php
  $mysql_host = "localhost";
  $mysql_user = "root";
  $mysql_password = "";
  $mysql_db = "MusicService";

  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  if(!$conn){
    die("connection fail: " . mysqli_connect_error());
  }
  session_start();
 ?>
