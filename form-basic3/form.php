<?php
  // POSTメソッドもグローバル変数$_POSTにname属性の値を持った配列に保存される仕組み
  // print_r($_POST);

  if(isset($_POST["submit"])){
    // print_r($_POST["name"]);
    // print_r($_POST["email"]);

    // POSTするときにはエスケープ処理をすることに注意
    // GETと違ってユーザーからサーバーにアクションできるためスクリプトを書く人もいる
    print_r(htmlspecialchars($_POST["name"]));
  }

?>


<?php include("./partials/header.php");?>
<!-- 送信にはPOSTに変更する -->
<!-- GETと違って送信内容がアドレスバーに表示されない（POSTは認証にも使われるため） -->
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
