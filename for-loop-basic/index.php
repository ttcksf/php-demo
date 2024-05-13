<?php
  $arr = ["aaa","bbb","ccc"];
  for($index = 0; $index < count($arr); $index++){
    // 配列のインデックス番号と同じになった
    // echo $index;
    echo "<br/>";
    // インデックス番号であるindexを指定して中の要素を取り出せる
    echo $arr[$index];
  }

  // 自動的に全ての要素を取り出すようになっていてインデックス番号で指定しなくて良い
  foreach($arr as $item){
    echo "<br/>";
    echo $item;
  }

  // 多重配列の時はインデックス番号を追いかけながら、
  // 中身の要素が連想配列になっているのでキー名を指定する
  $users = [
    [
      "name" => "yamada",
      "age" => 20,
    ],
    [
      "name" => "tanaka",
      "age" => 21,
    ],
    [
      "name" => "yoshida",
      "age" => 22,
    ],
  ];

  foreach($users as $user){
    echo "<br/>";
    echo $user["name"];
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
