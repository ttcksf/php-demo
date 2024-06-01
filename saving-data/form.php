<?php
  // ここでインポートしておく
  include("./config/db_connect.php");

  $name = "";
  $email = "";
  $errors = [
    "name" => "",
    "email" => ""
  ];
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    if(empty($_POST["name"])){
      $errors["name"] = "名前を入力してください";
    }else{
      echo htmlspecialchars($name);
    }
    if(empty($_POST["email"])){
      $errors["email"] =  "メールアドレスを入力してください";
    }else{
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo htmlspecialchars($_POST["email"]);
      }else{
        $errors["email"] = "メールアドレスの形式にしてください";
      }
    }

    if(array_filter($errors)){

    }else{
      // DBに送信するデータを保護する（htmlspecialcharsはレンダリング時の保護）
      $name = mysqli_real_escape_string($conn, $_POST["name"]);
      $email = mysqli_real_escape_string($conn, $_POST["email"]);

      $sql = "INSERT INTO users(name, email) VALUES('$name','$email')";
      if(mysqli_query($conn, $sql)){
        header("Location: index.php");
      }else{
        echo "クエリエラー:" . mysqli_error($conn);
      }
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

