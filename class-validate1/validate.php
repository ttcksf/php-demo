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

    }
    private function validateUsername(){

    }
    private function validateEmail(){

    }
    private function addError(){

    }
  }

?>
