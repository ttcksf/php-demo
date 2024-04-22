<?php
  // 改行はスペースになってしまう
  print_r($_POST["text"]);
  // 改行を反映する
  // print_r(nl2br($_POST["text"]));
  echo nl2br(htmlspecialchars($_POST["text"]));
?>
