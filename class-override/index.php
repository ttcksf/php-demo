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
  class AdminUser extends User{
    public $role;
    public function __construct($username, $email, $role){
      $this->role = $role;
      parent::__construct($username,$email);
    }

  }

  $admin = new AdminUser("suzuki","suzuki@test.com", 1);
  echo $admin->test() . "<br>";
  echo $admin->role;
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
