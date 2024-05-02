<?php
// データの中身をデバックするのに使う
print_r("こんにちは");
// 画面に表示させるのに使う
echo "こんにちは";
// HTMLタグとテキストを混ぜて直感的に書けるのが人気の一つ
echo "<h1>タイトル</h1>";
// PHPタグはブラウザには表示されず、echoで書いたものはHTMLかテキストに変換される仕組み
// ブラウザ自体にPHPを処理することはできずサーバー側で変換されたHTMLで表示していることになる
// PHPはセミコロンが句読点のように次のコードに移動する合図になっているためセミコロンがないとエラーになる（JSやPythonとは違う）
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
</body>
</html>
