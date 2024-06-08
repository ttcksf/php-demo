<?php
  class UserValidate{
    private $data;
    private $errors = [];
    // インスタンス化しなくてもデータを確認できるように
    private static $fields = ["username", "email"];

    public function __construct($post_data){
      $this->data = $post_data;
    }

    public function validateForm(){
      foreach(self::$fields as $field){
        // 指定したキーが配列にあるか（入力があるか）
        if(!array_key_exists($field, $this->data)){
          trigger_error(("$field が見つかりませんでした"));
          return;
        }
      }
      $this->validateUsername();
      $this->validateEmail();
      // エラーがなければ空の配列になる想定
      return $this->errors;
    }
    private function validateUsername(){
      // 空文字（未入力）を排除する条件分岐に繋げるため
      $val = trim($this->data["username"]);
      // usernameが空かチェック
      if(empty($val)){
        $this->addError("username", "usernameがありません");
      }else{

      }
    }
    private function validateEmail(){
      // 空文字（未入力）を排除する条件分岐に繋げるため
      $val = trim($this->data["email"]);
      // usernameが空かチェック
      if(empty($val)){
        $this->addError("email", "emailがありません");
      }else{
        if(!filter_val($val, FILTER_VALIDATE_EMAIL)){
          $this->addError("email","emailがメールアドレスの形式になっていません");
        }
      }

    }
    private function addError($key,$val){
      $this->errors[$key] = $val;
    }
  }

?>
