<?php
  // boolean型を使うとパターン分けや条件分岐が作れる
  $age = 40;
  if($age < 20){
    echo "未成年です";
  }else{
    echo "成人です";
  }
  // 条件は2個じゃなくても良い
  if($age < 20){
    echo "学生です";
  }elseif($age < 70){
    echo "社会人です";
  }else{
    echo "老齢年金の対象です";
  }

  // ループの中でも使える
  $students = [
    ["name" => "yamada", "age" => 20],
    ["name" => "tanaka", "age" => 19],
    ["name" => "yoshida", "age" => 22],
  ];
  foreach($students as $student){
    // if($student["age"] < 20){
    // 実際にはマイナスを排除しないといけない
    // &&を使うと2個の条件に合致したものを検索できる
    if($student["age"] < 20 && $student["age"] >= 0){
      echo $student["name"] . "は未成年です";
    }
    // 今回は適さないが||だと、どちらかの条件だけを満たせばtrueになる
    if($student["age"] < 20 || $student["age"] >= 0){
      echo $student["name"] . "は未成年です";
    }
  }
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
