<!-- preタグで囲むと見やすい -->
<pre>
  <?php  print_r($_POST);?>
</pre>
<?php
  if ($_POST["age"] === "1") echo "10代の";
  if ($_POST["age"] === "2") echo "20代の";
  if ($_POST["age"] === "3") echo "30代の";
  if ($_POST["age"] === "4") echo "40代の";
  if ($_POST["gender"] === "1") echo "男性です";
  if ($_POST["gender"] === "2") echo "女性です";
  // value属性は値と日本語の値でも可能だが英語や数字の方が後で値に変更があったときなどカスタマイズしやすい
?>
