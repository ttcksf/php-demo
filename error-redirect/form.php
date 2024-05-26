<?php
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

    // 引数に渡した配列の中身が空だったらfalseを渡す関数
    if(array_filter($errors)){
      // echo "入力内容を修正してください";

    }else{
      // echo "正常に送信されました";
      header("Location: index.php");
    }
  }

?>

<?php include("./partials/header.php");?>
<form action="form.php" method="POST">
<label for="">
    氏名
    <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
    <div style="color: red;"><?php echo $errors["name"];?></div>
  </label>
  <label for="">
    Email
    <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
    <div style="color: red;"><?php echo $errors["email"];?></div>
  </label>
  <input type="submit" name="submit" value="送信">
</form>
<?php include("./partials/footer.php");?>

