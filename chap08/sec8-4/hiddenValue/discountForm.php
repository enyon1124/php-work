<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>割引購入ページ</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <div>

    <?php
    $discount = 0.8;
    $off = (1 - $discount) * 100;
    if ($discount > 0) {
      echo "<h2>このページでの購入は{$off}%OFFになります。</h2>";
    }
    $tanka = 2900;
    $tanka_fmt = number_format($tanka);
    ?>

    <form action="discount.php" method="POST">
      <input type="hidden" name="discount" value="<?php echo $discount; ?>">
      <input type="hidden" name="tanka" value="<?php echo $tanka; ?>">
      <ul>
        <li>単価：<?php echo $tanka_fmt; ?>円</li>
        <li><label>個数：
            <input type="number" name="kosu">
          </label></li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
  </div>
</body>

</html>