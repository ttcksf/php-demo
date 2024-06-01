<?php
  $conn = mysqli_connect("localhost", "test-user", "test1234", "php-demo");

  if(!$conn){
    echo "接続エラー：" . mysqli_connect_error();
  }
?>
