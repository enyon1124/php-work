<?php
$nameList = ["田中達也", "Sam Jones", "新井貴子"];
function nameCheck($name)
{
  global $nameList;
  if (in_array($name, $nameList)) {
    echo "メンバーです";
  } else {
    echo "メンバーではありません";
  }
}

echo nameCheck("田中達也"), PHP_EOL;
echo nameCheck("新井"), PHP_EOL;
echo nameCheck("Sam Jones"), PHP_EOL;
echo nameCheck("SAM JONES"), PHP_EOL;
