<?php
  $age = 20;
  if($age >= 20){
    echo "成人です";
  }else{
    echo "未成年です";
  }

  $result = $age >= 20 ? "成人です" : "未成年です";
  echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo  $age >= 20 ? "成人です" : "未成年です";?></h1>
</body>
</html>


