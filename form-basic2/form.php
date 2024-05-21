<?php
  // フォームとしてはページのリロードのたびに表示されたくない
  // print_r($_GET);

  // name="submit"に値がある時（ボタンを押した時）にデータ取得する
  // データが空の場合は取得作業を実行しないことになる
  if(isset($_GET["submit"])){
    print_r($_GET);
    // 項目別に取得するには連想配列のキーを指定する
    print_r($_GET["name"]);
    print_r($_GET["email"]);
  }

?>


<?php include("./partials/header.php");?>

<form action="form.php" method="GET">
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
