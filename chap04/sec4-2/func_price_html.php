<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <p>2400円を2個購入した場合の金額は</p>
  <?php
  $kingaku1 = price(2400, 2);
  echo " $kingaku1 円"
  ?>

  <p>1200円を5個購入した場合の金額は</p>
  <?php
  $kingaku2 = price(1200, 5);
  echo " $kingaku2 円"
  ?>

  <?php
  function price($tanka, $kosu)
  {
    $souryo = 250;
    $ryoukin = $tanka * $kosu; //短歌×個数
    // 5000円未満は送料250円
    if ($ryoukin < 5000) {
      $ryoukin += $souryo; //5000円未満は送料を加算します
    }
    return $ryoukin;
  }
  ?>
</body>

</html>