<?php
// パスワードは後から再設定できる
$user = "php-demo";
$pass = "php1234";

$dbh = new PDO("mysql:host=localhost;dbname=php-demo;charset=utf8", $user, $pass);
// エラーモードを設定
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM users";
$stmt = $dbh->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
$dbh = null;

?>
