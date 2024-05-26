<!-- 権限から「ユーザーアカウントを追加する」 -->
<!-- ユーザー名とパスワードを入力してホスト名はlocalhostを選択 -->
<!-- 権限は全てチェックしておく -->

<?php
  // データベースとの接続(失敗例も検証しておく)
  $conn = mysqli_connect("localhost", "ユーザー名", "パスワード", "データベース名");

  // 接続確認
  if(!$conn){
    echo "接続エラー：" . mysqli_connect_error();
  }
?>

<!-- HTMLのテンプレートとPHPコードは分けておく -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php include("./partials/header.php");?>
  <?php include("./partials/footer.php");?>
</body>
</html>


