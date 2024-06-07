<?php
  $conn = mysqli_connect("localhost","admin_user","test1234","php_test");

  if($conn){
    // echo "接続OK";
  }else{
    echo "接続エラー:" . mysqli_connect_error();
  }
?>
