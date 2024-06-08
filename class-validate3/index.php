<?php
  // インポートしておく
  include("./validate.php");
  if(isset($_POST["submit"])){
    $validation = new UserValidate($_POST);
    $errors = $validation->validateForm();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h2>会員登録</h2>
    <form method="POST" action="index.php">
      <label for="">
        名前
        <!-- valueに値を表示 -->
        <input type="text" name="username" value="<?php echo htmlspecialchars($_POST["username"] ?? "");?>">
        <p style="color:red;"><?php echo $errors["username"] ?? "";?></p>
      </label>
      <label for="">
        メールアドレス
        <!-- valueに値を表示 -->
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST["email"] ?? "");?>">
        <p style="color: red;"><?php echo $errors["email"] ?? "";?></p>
      </label>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</body>
</html>
