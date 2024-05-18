<?php
    // trueは文字列の"1"と表示されるがfalseは何も表示されない
    // ブラウザはtrue,falseを直接表示するのではなく文字列に変換するため
    // echo true;
    // echo false;
    // 結果がtrueになるものも1と表示される
    // ==は不等号で=は代入の違いがあるので注意
    // echo 1 > 0;
    // echo "a" == "a";
    // 等しくないことは!=を使う
    // echo 1 != 1;

    // データの型までチェックしないためtrueになる
    echo 1 == "1";
    echo true == "1";
    // 厳格なチェックは===を使う
    echo 1 === "1";
    echo true === "1";

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
