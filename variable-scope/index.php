<?php
  // グローバルスコープ（特に気にする必要はない）
  $test = "test";
  echo $test;

  // ローカルスコープ（閉じられた世界）
  function say_hello(){
    $name = "山田";
    echo "こんにちは{$name}さん";

    // グローバルスコープからローカルスコープに取り込む方法
    global $test;
    echo $test;

    // グローバルスコープからローカルスコープに取り込んで再代入もできる
    // $test = "hello";
    // echo $test;
  }
  say_hello();
  // ローカルスコープなので呼び出せない
  // echo $name;

  // function change_test($test){
  //   $test = "hello";
  //   echo $test;
  // }
  // 引数としてグローバルスコープからローカルスコープに取り込むとglobalは不要だが更新はローカルスコープの中のみになる
  // globalはグローバルとローカルの値を揃える役割があった
  // change_test($test);
  // echo $test;

  // 引数としてグローバルスコープからローカルスコープに取り込んで更新もグローバルとローカルで揃えたいとき
  function change_test(&$test){
    $test = "hello";
    echo $test;
  }
  change_test($test);
  echo $test;
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
