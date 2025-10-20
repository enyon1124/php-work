<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>フォーム入力処理の基本</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>

    <form method="POST" action="calc.php">
      <ul>
        <li><label>単価：<input type="number" name="tanka"></label></li>
        <li><label>個数：<input type="number" name="kosu"></label></li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
  </div>
</body>

</html>