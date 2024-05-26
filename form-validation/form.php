<?php

  if(isset($_POST["submit"])){
    // 入力のチェック
    if(empty($_POST["name"])){
      echo "名前を入力してください";
    }else{
      echo htmlspecialchars($_POST["name"]);
    }
    if(empty($_POST["email"])){
      echo "メールアドレスを入力してください";
    }else{
      echo htmlspecialchars($_POST["email"]);
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

