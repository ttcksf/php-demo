<!-- データベースの作成 -->
<!-- テーブル名を4列で作成 -->
<!-- id,name,email,created_atでカラムを作成 -->
<!-- idにはint型でA_Iにチェックを入れる -->
<!-- nameにはvarchar型で255文字の制限を入れる -->
<!-- emailにはvarchar型で255文字の制限を入れる -->
<!-- created_atにはtimestamp型でデフォルト値をNoneからCURRENT_TIMEに変更する -->
<!-- Insertからテストデータ（idは1から始めてタイムスタンプは触らなくてOK）を入れる -->

<?php include("./partials/header.php");?>
<?php include("./partials/footer.php");?>

