<?php
  // 初回は空欄なので空文字を設定しておく
  $name = "";
  $email = "";
  $errors = [
    "name" => "",
    "email" => ""
  ];
  if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
      $errors["name"] = "名前を入力してください";
    }else{
      // htmlspecialchars($_POST["name"]);
      $name = $_POST["name"];
      echo htmlspecialchars($name);
    }
    if(empty($_POST["email"])){
      $errors["email"] =  "メールアドレスを入力してください";
    }else{
      $email = $_POST["email"];
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo htmlspecialchars($_POST["email"]);
      }else{
        $errors["email"] = "メールアドレスの形式にしてください";
      }
    }
  }

?>

<?php include("./partials/header.php");?>
<form action="form.php" method="POST">
<label for="">
    氏名
    <input type="text" name="name" value="<?php echo $name;?>">
    <div style="color: red;"><?php echo $errors["name"];?></div>
  </label>
  <label for="">
    Email
    <input type="text" name="email" value="<?php echo $email;?>">
    <div style="color: red;"><?php echo $errors["email"];?></div>
  </label>
  <input type="submit" name="submit" value="送信">
</form>
<?php include("./partials/footer.php");?>

