<?php
$zip = $_POST['zip'];
echo $zip;

$pattern = "/[0-9]{3}-[0-9]{4}|[0-9]{7}/u";
//  "/\d{3}-?\d{4}/u"; でも可能（ちょっと変わる）

$result = preg_match($pattern, $zip);
//　第一文字にパターン、その月に文字列


if ($result) {
  echo "正しい形式です";
} else {
  echo "不正な形式です";
}

?>

<p><a href="index.php">戻る</a></p>

// $pattern = "/[0-9]{3}-[0-9]{4}|[0-9]{7}/u";