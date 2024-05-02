<?php
try{
  $user = "php-demo";
  // エラーを発生させる
  // $pass = "php1234";
  $pass = "php123";
  
  $dbh = new PDO("mysql:host=localhost;dbname=php-demo;charset=utf8", $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM users";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  $dbh = null;
}catch(Exception $e){
  // 例外クラスを変数$eに代入して参照できるようにする
  // $eからメッセージを取得して表示する
  echo "エラーが発生しました:" . htmlspecialchars($e->getMessage());
}

?>
