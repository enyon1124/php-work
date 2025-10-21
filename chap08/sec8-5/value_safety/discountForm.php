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
    require_once('../lib/util.php');
    if (!cken($_POST)) {
      exit("Encoding Error! Not UTF-8");
    }
    ?>

    <?php
    $kosu = $_POST['kosu'] ?? '';
    ?>

    <?php
    require_once('saledata.php');
    $couponCode = 'ha45as';
    $goodsID = 'ax102';
    $discount = getCouponRate($couponCode);
    $tanka = getPrice($goodsID);
    if (is_null($discount) || is_null($tanka)) {
      $err = '<div class"error">不正な操作がありました</div>';
      exit($err);
    }
    ?>
    <?php
    $off = (1 - $discount) * 100;
    if ($discount > 0) {
      echo "<h2>このページでの購入は{$off}%OFFになります。</h2>";
    }
    $tanka_fmt = number_format($tanka);
    ?>

    <form action="discount.php" method="POST">
      <input type="hidden" name="couponCode" value="<?php echo h($couponCode); ?>">
      <input type="hidden" name="goodsID" value="<?php echo h($goodsID); ?>">
      <ul>
        <li>単価：<?php echo $tanka_fmt; ?>円</li>
        <li><label>個数：
            <input type="number" name="kosu"
              value="<?php echo h($kosu) ?>">
          </label></li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
  </div>
</body>

</html>