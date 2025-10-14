<?php
$yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
$yomi2 = "あしがらきんたろう";
$hiragana1 = mb_convert_kana($yomi1, "KCV");
$hiragana2 = mb_convert_kana($yomi2, "KCV");
echo $hiragana1, PHP_EOL;
echo $hiragana2, PHP_EOL;
