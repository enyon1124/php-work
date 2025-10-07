<?php
$wanko = $_POST['wanko']; //大文字じゃないとダメ
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>wanko</h1>
  <p><?php echo $wanko; ?></p>
  <p><a href="test.php">戻る</a></p>
</body>
</html>