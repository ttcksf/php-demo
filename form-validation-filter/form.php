<?php

  if(isset($_POST["submit"])){
    if(empty($_POST["name"])){
      echo "名前を入力してください";
    }else{
      echo htmlspecialchars($_POST["name"]);
    }
    if(empty($_POST["email"])){
      echo "メールアドレスを入力してください";
    }else{
      // メールアドレスのチェック
      $email = $_POST["email"];
      // チェックしたい値、フィルターの種類
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo htmlspecialchars($_POST["email"]);
      }else{
        echo "メールアドレスの形式にしてください";
      }
    }
  }

?>

<?php include("./partials/header.php");?>
<form action="form.php" method="POST">
<label for="">
    氏名
    <input type="text" name="name">
  </label>
  <label for="">
    Email
    <input type="text" name="email">
  </label>
  <input type="submit" name="submit" value="送信">
</form>
<?php include("./partials/footer.php");?>

