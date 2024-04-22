<?php
  print_r($_POST["budget"]);
  // 数字かをチェックする（全角数字もチェックできる）
  if(is_numeric($_POST["budget"])){
    echo "数字です";
  }else{
    echo "数字ではありません";
  }
  // 数字用のフォーマットに変換（全角数字は対応できない）
  print_r(number_format($_POST["budget"]));
?>
