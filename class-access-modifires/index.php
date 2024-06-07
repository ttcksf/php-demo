<?php
  class User {
    
    // public $username;
    private $username;
    public $email;
    public function __construct($username,$email){
      $this->username = $username;
      $this->email = $email;
    }
    public function test(){
      return "$this->username";
    }
  }
  $user1 = new User("yamada", "yamada@test.com");
  // publicプロパティは変更が可能
  // privateプロパティは変更ができない
  // $user1->username = "yoshida";
  
  // ただし直接アクセスすることもできなくなくなる
  // echo $user1->username . "<br>";
  // $thisを経由するとアクセスできる
  echo $user1->test();

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
