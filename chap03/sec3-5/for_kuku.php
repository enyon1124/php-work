<?php
for ($y = 1; $y <= 9; $y++) {
  for ($x = 1; $x <= 9; $x++) {
    $r = $x * $y;
    echo "$x X $y = $r |";
  }
  echo PHP_EOL;
}
