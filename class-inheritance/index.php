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
  // 同じ内容を引き継いだ別のクラスを作成できる
  class AdminUser extends User{
    // 新しく作成するものがあるとparent::__constructがないとコンストラクターが上書きされてしまうので注意
    public $role;
    public function __construct($username, $email, $role){
      $this->role = $role;
      parent::__construct($username,$email);
    }

  }
  
  $user = new User("yamada","yamada@test.com");
  // $admin = new AdminUser("suzuki","suzuki@test.com");
  // 引き継いだプロパティ、メソッドは設計を新たに書かなくても使用できる
  // echo $user->email . "<br>";
  // echo $admin->email . "<br>";
  $admin = new AdminUser("suzuki","suzuki@test.com", 1);
  // 新しく作成するものがあるとparent::__constructがないとコンストラクターが上書きされてしまうので注意
  echo $admin->role . "<br>";
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
