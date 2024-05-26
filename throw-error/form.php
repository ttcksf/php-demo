<?php
  // エラー文の格納
  $errors = [
    "name" => "",
    "email" => ""
  ];
  if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
      $errors["name"] = "名前を入力してください";
    }else{
      echo htmlspecialchars($_POST["name"]);
      htmlspecialchars($_POST["name"]);
    }
    if(empty($_POST["email"])){
      // echo "メールアドレスを入力してください";
      $errors["email"] =  "メールアドレスを入力してください";
    }else{
      $email = $_POST["email"];
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo htmlspecialchars($_POST["email"]);
      }else{
        // echo "メールアドレスの形式にしてください";
        $errors["email"] = "メールアドレスの形式にしてください";
      }
    }
  }

?>

<?php include("./partials/header.php");?>
<form action="form.php" method="POST">
<label for="">
    氏名
    <input type="text" name="name">
    <div style="color: red;"><?php echo $errors["name"];?></div>
  </label>
  <label for="">
    Email
    <input type="text" name="email">
    <div style="color: red;"><?php echo $errors["email"];?></div>
  </label>
  <input type="submit" name="submit" value="送信">
</form>
<?php include("./partials/footer.php");?>

