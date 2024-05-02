<?php
  // 英語か_で始まる
  // $_test = "テスト";
  $test = "テスト";
  // 数字や_以外の記号を先頭に持ってくることはできない
  // $1test = "テスト";
  // $[test = "テスト";
  print_r($test);
  // 長い変数名は_で挟んだ名前にすることが多い
  $first_name = "山田";
  print_r($first_name);
  $last_name = "<h3>太郎</h3>";

  // 定数はdefineを使う
  define("NAME", "山田太郎");
  // 一度作ると後から再代入ができない
  // define("NAME", "田中大貴");

  // 変数はできる(上から下に向かって更新される仕組み)
  $last_name = "<h1>太郎</h1>";
  
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
  <h1>トップページです。</h1>
  <!-- 変数に格納したものをHTMLのテキストに変換して繋げることができる -->
  <p>苗字は<?php echo $first_name;?>です。</p>
  <!-- 変数にHTMLタグを先に入れておいてマークアップと一緒に画面に表示させることもできる -->
  <p>名前は<?php echo $last_name;?>です。</p>
  <p>フルネームは<?php echo NAME;?>です。</p>
</body>
</html>
