<?php
  class User {
    private $username;
    public $email;
    public function __construct($username,$email){
      $this->username = $username;
      $this->email = $email;
    }
    public function test(){
      return "$this->username";
    }

    public function setUsername($username){
      $this->username = $username;
    }
  }
  $user1 = new User("yamada", "yamada@test.com");
  // privateのプロパティにはアクセスできないが$thisを経由すれば画面に表示することができるようになる
  echo $user1->test() . "<br>";
  // $thisを経由するとアクセスできて変更もできるため、変更時には直接アクセスするのではなく$thisを経由した関数を作ることが多い
  $user1->setUsername("tanaka");
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
