<?php
  class User {
    public $username = "yamada";
    public $email = "test@test.com";
    public function test(){
      // $thisがクラス自身のことになる
      return "$this->username";
    }
  }

  $user1 = new User();
  $user2 = new User();
  
  echo $user1->test() . "<br>";
  echo $user2->test() . "<br>";
  // プロパティの全取得
  print_r(get_class_vars("User"));
  // メソッドの全取得
  print_r(get_class_methods("User"));
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
