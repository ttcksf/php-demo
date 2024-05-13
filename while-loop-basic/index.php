<?php
    $arr = ["aaa","bbb","ccc"];
    // インデックス番号を追いかける
    $index = 0;
    while($index < count($arr)){
      // echo $index;
      echo $arr[$index];
      echo "<br/>";
      $index++;
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

    $index = 0;
    while($index < count($users)){
      echo $index;
      echo $users[$index]["name"];
      echo "<br/>";
      $index++;
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
