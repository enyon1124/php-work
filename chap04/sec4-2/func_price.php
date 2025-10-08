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
