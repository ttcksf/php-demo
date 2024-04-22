<?php
  // $_POSTはname属性をキーにした値の配列が格納されている
  // $_POSTはpostメソッド実行時に自動的に作成される変数
  // print_r($_POST);
  // キーを指定すると個別の値を取得できる
  print_r($_POST["f_name"]);
  print_r($_POST["l_name"]);
?>
