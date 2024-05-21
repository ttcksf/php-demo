<?php
  // name属性の値が配列になって$_GETというグローバル変数に格納される仕組み
  // 入力値、クリックがないときはデータはないものとして配列になっている
  // print_r($_GET);

?>


<?php include("./partials/header.php");?>

<!-- getメソッドはアドレスバーにデータが表示される -->
<!-- formタグのactionには受け取るファイルを指定するがgetメソッドは受け取るものがないため自分自身を指定することになる -->
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
