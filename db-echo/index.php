<?php
// データベースの「挿入」からデータを追加
try{
  $user = "php-demo";
  $pass = "php1234";
  $dbh = new PDO("mysql:host=localhost;dbname=php-demo;charset=utf8", $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM users";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  foreach($result as $data){
    echo htmlspecialchars($data["f_name"]) . "\n";
    echo htmlspecialchars($data["l_name"]) . "\n";
    echo htmlspecialchars($data["age"]) . "\n";
    echo htmlspecialchars($data["gender"]) . "\n";
  }
  $dbh = null;
}catch(Exception $e){
  echo "エラーが発生しました:" . htmlspecialchars($e->getMessage());
  die();
}

?>
