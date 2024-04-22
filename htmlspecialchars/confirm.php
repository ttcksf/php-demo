<?php
  // 通常だとスクリプトが実行されてしまう
  // echo $_POST["f_name"];
  // タグを無効化して文字列にする
  // デフォルトでは第二引数にENT_QUOTES、第三引数に"UTF-8"が指定されるようになった。
  echo htmlspecialchars($_POST["f_name"]);
?>
