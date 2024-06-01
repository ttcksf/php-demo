<?php
  // セッションはサーバー上に保存されクッキーはブラウザ上に保存される
  if(isset($_POST["submit"])){
    // 1日保存する
    setcookie("name", $_POST["name"], time() + 86400);

    header("Location: confirm.php");
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
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <input type="text" name="name"/>
    <input type="submit" name="submit" value="送信" />
  </form>
</body>
</html>


