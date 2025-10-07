<?php
$name = '佐藤明';
$age = 28;
$sex = '男';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>人物紹介</h1>
<dl>
<dt>名前</dt>
<dd><?= $name ?></dd>
<dt>年齢</dt>
<dd><?= $age ?></dd>
<dt>性別</dt>
<dd><?= $sex ?></dd>
</dl>
</body>
</html>