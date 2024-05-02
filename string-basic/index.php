<?php
  $first_name = "山田";
  $last_name = "太郎";
  // 文字列を合体させるときは「.」で挟む（計算ではないため）
  $full_name = $first_name . $last_name;
  // ダブルクォーテーションは変数と一緒に文字列を書ける
  $sentence = "姓名：$full_name";
  // $sentence = '姓名：$full_name';

  // 文字列の中にクォーテーションを入れるときは互い違いにする
  // $say_hello = ""こんにちは！"";
  $say_hello = '"こんにちは！"';
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
  <p>姓名：<?php echo $full_name;?></p>
  <p><?php echo $sentence;?></p>
  <p><?php echo $say_hello;?></p>
</body>
</html>
