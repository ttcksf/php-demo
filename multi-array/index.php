<?php
//  $arr = [
//   [10,20,30],
//   [40,50,60]
//  ];
$arr = [
  [
    "one" => 10,
    "two" => 20,
    "three" => 30,
  ],
  [
    "four" => 40,
    "five" => 50,
    "six" => 60
  ]
];
//  print_r($arr[0]);
//  print_r($arr[0][0]);
// print_r($arr[0]["one"]);
// 多重配列に配列を追加する
$arr[] = (["seven" => 70, "eight" => 80, "nine" => 90]);
print_r($arr);
// 多重配列から配列を削除する
array_pop($arr);
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
