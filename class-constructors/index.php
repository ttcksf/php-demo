<?php
  class User {
    
    public $username;
    public $email;
    // インスタンス化した時に初期設定を実行する特別な関数
    public function __construct($username,$email){
      $this->username = $username;
      $this->email = $email;
    }
    public function test(){
      return "$this->username";
    }
  }
  // インスタンス化するときに動的に変更できる
  $user1 = new User("yamada", "yamada@test.com");
  $user2 = new User("tanaka", "tanaka@test.com");
  
  echo $user1->username . "<br>";
  echo $user2->email . "<br>";

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
