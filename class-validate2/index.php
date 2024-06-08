<?php
  if(isset($_POST["submit"])){
    print_r($_POST);
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
        <input type="text" name="username">
      </label>
      <label for="">
        メールアドレス
        <input type="text" name="email">
      </label>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</body>
</html>
