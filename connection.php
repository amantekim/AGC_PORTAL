<?php
$link = mysqli_connect("122.54.194.211", "root", "jsqtechdatabase", "db_test");
  if(mysqli_connect_error()){
  die('ERROR: Unable to connect:' . mysqli_connect_error());
  echo "<script>window.alert('Hi!')</script>";
  }
?>
