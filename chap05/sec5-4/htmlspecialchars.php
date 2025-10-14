<?php
$msg = "東京<->京都 ' Eat & Run 'ツアー";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>エンティティ交換</title>
</head>

<body>
  <?php
  // echo $msg;
  echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
  ?>
  <p><a href="index.php">もどる</a></p>
</body>

</html>