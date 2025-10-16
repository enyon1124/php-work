<?php
$numberList = [1008, 1234, 1301];
$numbers = [1301, 1206, 1008, 1214];
function checkNumber($no)
{
  global $numbers;
  if (in_array($no, $numbers)) {
    echo "{$no}は合格です。";
  } else {
    echo "{$no}は見つかりません。";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>配列を検索する</title>
</head>

<body>
  <?php
  echo "<ol>", PHP_EOL;
  foreach ($numList as $value) {
    echo "<li>", checkNumber($value), "</li>", PHP_EOL;
  }
  echo "<ol>", PHP_EOL;
  ?>
</body>

</html>