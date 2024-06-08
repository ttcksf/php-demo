<?php
  class UserValidate{
    private $data;
    private $errors = [];
    private static $fields = ["username", "email"];

    public function __construct($post_data){
      $this->data = $post_data;
    }

    public function validateForm(){
      foreach(self::$fields as $field){
        if(!array_key_exists($field, $this->data)){
          trigger_error(("$field が見つかりませんでした"));
          return;
        }
      }
      $this->validateUsername();
      $this->validateEmail();
      return $this->errors;
    }
    private function validateUsername(){
      $val = trim($this->data["username"]);
      if(empty($val)){
        $this->addError("username", "usernameがありません");
      }else{

      }
    }
    private function validateEmail(){
      $val = trim($this->data["email"]);
      if(empty($val)){
        $this->addError("email", "emailがありません");
      }else{
        if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
          $this->addError("email","emailがメールアドレスの形式になっていません");
        }
      }

    }
    private function addError($key,$val){
      $this->errors[$key] = $val;
    }
  }

?>
