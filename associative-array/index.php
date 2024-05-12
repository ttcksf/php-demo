<?php
 $arr1 = [10,20,30];
 print_r($arr1);
 print_r($arr1[0]);

//  インデックス番号がキーに置き換わるだけ
 $arr2 = [
  "one" => 10,
  "two" => 20,
  "three" => 30
 ];
 //  要素を取得するときもインデックス番号がキーに置き換わるだけ
 print_r($arr2["one"]);
 //  要素の追加
 $arr2["four"] = 40;
 print_r($arr2);

//  要素のカウント
print_r(count($arr2));

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
