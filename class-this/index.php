<?php
  class User {
    public $username = "yamada";
    public $email = "test@test.com";
    public function test(){
      // $thisはクラス自身のこと
      $this->username;
      // return "test";
      // $thisを介してメソッドからプロパティへなど、内部でアクセスすることもできる
      return $this->username;
    }
  }

  $user1 = new User();
  $user2 = new User();
  
  echo $user1->username . "<br>";
  echo $user2->email . "<br>";
  echo $user2->test() . "<br>";
  // 全てのプロパティとメソッドを参照
  print_r(get_class_vars("User"));
  print_r(get_class_methods("User"));
  // プロパティを外部から変更することもできる
  $user1->username = "tanaka";
  echo $user1->username . "<br>";

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
