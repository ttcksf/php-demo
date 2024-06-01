<?php
  session_start();
  $name = $_SESSION["name"];
  // 上書きすることも可能
  // $name = "吉田";
  echo $name;

  // セッションの削除
  // unset($_SESSION["name"]);
  // $name = $_SESSION["name"];
  // echo $name;
  
?>
