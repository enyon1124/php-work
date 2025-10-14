<?php
#
#文字列を受け取って文字数と値段を返す関数
#10文字を超えるとその一文字１００円追加される
#引数：$str --　任意の文字列
#戻り値：文字列：”何文字　何円”
#
function price(string $str)
{
  $kakaku = 3000;
  $length = mb_strlen($str);
  if ($length > 10) {
    $kakaku += ($length - 10) * 100;
    // number_format: ３桁カンマ表示・文字列
  }
  $kakaku = number_format($kakaku);
  $result = "{$length} 文字 {$kakaku} 円";
  return $result;
}
?>

<pre>
<?php
$msg1 = "hello world!";
$msg2 = "ハローワールド";
echo price($msg1);
echo PHP_EOL;
echo price($msg2);
?>
</pre>oho -s
