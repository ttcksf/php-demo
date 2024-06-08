<?php
  class UserValidate{
    private $data;
    private $error = [];
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
    }
    private function validateUsername(){

    }
    private function validateEmail(){

    }
    private function addError(){

    }
  }

?>
