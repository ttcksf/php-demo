<?php
  // function say_hello(){
  //   echo "こんにちは";
  //   echo "<br/>";
  // }
  // 関数は実行されて初めて使える
  // say_hello();

  // 引数は答えを柔軟に変更するためのパーツの役割
  // function say_hello($name){
  //   echo "こんにちは" . $name . "さん";
  //   echo "<br/>";
  // }
  // say_hello("田中");
  // say_hello("山田");
  // 引数を設定したら実行時に必ず使うルール
  // say_hello();

  function say_hello($name = "山田"){
    echo "こんにちは" . $name . "さん";
    echo "<br/>";
  }
  // デフォルト値があれば省略してもOK
  say_hello();
  // 引数を指定するとデフォルト値が上書きされて実行される仕組み
  say_hello("高橋");

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
