<?php

function taxprice($tanka, $kosu)
{
  global $tax;
  $ryoukin = $tanka * $kosu * (1 + $tax);
  echo "{$ryoukin}円です。";
}

$tax = 0.1;


taxprice(tanka: 250, kosu: 4);
echo "税込み" . $tax * 100, "%";
