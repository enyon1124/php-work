<?php
do {
  $a = mt_rand(1, 13);
  $b = mt_rand(1, 13);
  $c = mt_rand(1, 13);
  $abc = $a + $b + $c;
  echo "$a $b $c = $abc", PHP_EOL;
} while ($abc !== 21);
echo "合計が21になる3個の数字。{$a}、{$b}、{$c}";
