<?php
  include("./config/db_connect.php");

  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php include("./partials/header.php");?>
  <p>ユーザー一覧</p>
  <?php foreach($users as $user):?>
    <p><?php echo htmlspecialchars($user["f_name"]);?></p>
  <?php endforeach;?>
  <?php include("./partials/footer.php");?>
</body>
</html>


