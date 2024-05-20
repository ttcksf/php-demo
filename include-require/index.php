<?php
    // 外部のファイルからデータやHTML、テキストなどを取り込むことができる
    // 共通パーツを1つのファイルで管理する方法はワードプレスなど多岐に使用される
    // include("./test.php");
    // require("./test.php");
    
    // これでも問題ない
    // include "./test.php";
    // require "./test.php";

    // エラー時に後続の処理を実行するかどうかの違いがある
    // include "./tests.php";
    // require "./tests.php";
    echo "トップページです";


?>
<!-- そのためHTMLの範囲外に書いたとしても動く -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
