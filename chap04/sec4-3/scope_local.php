<?php
function price($kosu)
{
  $ryoukin = 250 * $kosu;
  echo "{$ryoukin}円です。";
}

$kosu = 2;
echo "{$kosu}個で";
price($kosu);
