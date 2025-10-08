<?php
// 空の配列をつくる
$numArray = array();
// 配列$numArrayの値が5個になるまで繰り返す
while (count($numArray) < 5) {
  $num = mt_rand(1, 30);
  if (! in_array($num, $numArray)) {
    array_push($numArray, $num);
  }
}