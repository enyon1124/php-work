<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  $msg = "おはよう";

  $colors = array("red", "blue", "green");
  $now = new DateTime();
  $tokuten = 45;
  $isPass = ($tokuten>50);
  $userName = NULL;
  var_dump($msg);
  var_dump($colors);
  var_dump($now);
  var_dump($tokuten);
  var_dump($isPass);
  var_dump($userName);
  ?>
</body>
</html>