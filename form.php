<?php
  include("./db_connect.php");
  $name = "";
  $email = "";
  $errors = [
    "name" => "",
    "email" => ""
  ];
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    if(empty($email)){
      $errors["email"] = "メールアドレスを入力してください";
    }else{
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        print_r(htmlspecialchars($email));
      }else{
        $errors["email"] = "メールアドレスの形式にしてください";
      }
    }
    if(empty($name)){
      $errors["name"] = "名前を入力してください";
    }else{
      print_r(htmlspecialchars($name));
    }
    if(array_filter($errors)){
      echo "入力内容を修正してください";
    }else{
      $name = mysqli_real_escape_string($conn, $name);
      $email = mysqli_real_escape_string($conn, $email);
      $sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
      if(mysqli_query($conn, $sql)){
        header("Location: index.php");
      }else{
        echo "クエリエラー：" . mysqli_error($conn);
      }
    }
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
  <?php include("./header.php");?>

  <form method="POST" action="form.php">
    <label>
      氏名
      <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
      <div style="color: red;"><?php echo $errors["name"];?></div>
    </label>
    <label>
      メールアドレス
      <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
      <div style="color: red;"><?php echo $errors["email"];?></div>
    </label>
    <input type="submit" name="submit" value="送信">

  </form>
  <?php include("./footer.php");?>
</body>
</html>
