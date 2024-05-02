<?php
  // 文字列から特定の文字だけ切り出して再代入する
  $name = "yamada";
  // $name = $name[0];

  // 文字列を操作する組み込み関数がある
  // 文字列の文字の数をカウントする
  $len = strlen($name);
  // 英語の小文字を大文字にする(エスティアールトゥアッパー)
  $bigger = strtoupper($name);
  // 英語の大文字を小文字にする
  $smaller = strtolower($bigger);
  // 文字の置換(前、後、変数もしくは文字列) 
  $new_name = str_replace("a", "w", $smaller);
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
  <p><?php echo $name;?>の文字の数は<?php echo $len;?>文字です。</p>
  <p>大文字で書くと<?php echo $bigger;?></p>
  <p>小文字で書くと<?php echo $smaller;?></p>
  <p><?php echo $new_name;?></p>
</body>
</html>
