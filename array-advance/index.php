<?php
 $numbers = [10,20,30];
//  要素の変更
//  $numbers[0] = 11;
// 要素の追加①
// $numbers[] = 40;
// 要素の追加②
// array_push($numbers,40);
 print_r($numbers);

//  要素の数をカウント
print_r(count($numbers));

// 配列の結合
$arr1 = [1,2,3];
$arr2 = [4,5,6];
// 順番に注意
// $arr = array_merge($arr1, $arr2);
$arr = array_merge($arr2, $arr1);
print_r($arr);
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
