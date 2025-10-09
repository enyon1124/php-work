<?php
// &$var -- 参照を受け取る
//       -- 変数のアドレスを受け取る
function oneUp(&$var)
{
  $var += 1;
}

$num = 5;
oneUp($num);
echo $num;
