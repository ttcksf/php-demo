<?php
  $name = "山田";
  $people = ["山田","鈴木","田中"];
  // 要素の取り出し
  // echo $people[0];
  // 要素の更新
  $people[0] = "木村";
  echo $people[0];
  

  // echoは文字列の出力に使うため配列をそのまま画面に出すことはできない
  // echo $people;
  // データの中身を見るにはprint_r
  // print_r($people);
  
  // この書き方もある
  $people2 = array("山田","鈴木","田中");
  print_r($people2);
?>
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
