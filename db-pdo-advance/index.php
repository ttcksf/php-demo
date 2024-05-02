<?php
try{
  $user = "php-demo";
  $pass = "php1234";
  // PDOクラスをインスタンス化してDB操作ができるようにする
  $dbh = new PDO("mysql:host=localhost;dbname=php-demo;charset=utf8", $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // SQL文の準備
  $sql = "SELECT * FROM users";
  // SQL文の実行（queryメソッドの引数にSQL文を入れると実行される）
  $stmt = $dbh->query($sql);
  // SQL文の実行による結果を取得する（fetchAllにすると配列になる）
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  $dbh = null;
}catch(Exception $e){
  echo "エラーが発生しました:" . htmlspecialchars($e->getMessage());
  die();
}

?>
