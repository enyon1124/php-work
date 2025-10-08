<?php
$user = (int)$_POST['user_num'];
echo "user:", $user;
$com = mt_rand(1, 9);
echo "com:", $com, "<br>";

$resule = $user <=> $com;

if ($resule === 0) {
  echo "あたり";
} else if ($resule === 1) {
  echo "大きい";
} else {
  echo "ちいさい";

  $moji = match ($user <=> $com) {
   0 => 'あたりです',
   1 => 'おおきすぎます';
   -1 => 'ちいさすぎます',
  };
  echo $moji;

?>


<a href="index.php">もどる</a>