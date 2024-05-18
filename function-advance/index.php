<?php
  $studentA = [
    "name" => "山田",
    "age" => 21
  ];
  function say_human($human){
    echo "{$human['name']}さんは{$human['age']}歳です";
  }
  say_human($studentA);

  // 戻り値は表示されるわけではない（関数はあくまで処理の実行であって結果の表示までは保証していない）
  function call_human($human){
    return "{$human['name']}さんは{$human['age']}歳です";
  }
  // call_human($studentA);
  // 戻り値は関数の実行を持って他の変数に結果を保存するときに便利
  $human = call_human($studentA);
  echo $human;

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
