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

$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
echo "金額１は $kingaku1 円" . "<br>" . PHP_EOL;
echo "金額２は $kingaku2 円";
