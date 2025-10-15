<?php

$goods = [
  "id" => "R56",
  "size" => "M",
  "price" => 2340
];

echo "id:" . $goods['id'] . PHP_EOL;
echo "サイズ:" . $goods['size'] . PHP_EOL;
echo "価格:" . number_format($goods['price']) . "円" . PHP_EOL;
