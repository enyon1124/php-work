<?php
const TAX = 0.1;
$price = 1250 * (1 + TAX);
echo $price, PHP_EOL;
echo '税込み', PHP_EOL;
echo PHP_VERSION, PHP_EOL;
echo PHP_OS, PHP_EOL;
echo __DIR__, PHP_EOL;
echo __FILE__;
?>