<?php
  class User {
    // プロパティ
    public $username = "yamada";
    public $email = "test@test.com";
    // メソッド
    public function test(){
      return "test";
    }
  }

  $user1 = new User();
  $user2 = new User();
  
  // jsの「.」のようなものが「->」になる
  echo $user1->username . "<br>";
  echo $user2->email . "<br>";
  echo $user2->test() . "<br>";
?>
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
