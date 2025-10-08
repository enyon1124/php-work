<?php
$user = (int)$_POST['user_num'];
echo "user:", $user;
$com = mt_rand(1, 9);
echo "com:", $com;

if ($user === $com) {
  echo "あたり";
} else if ($user > $com) {
  echo "大きい";
} else {
  echo "ちいさい";
}
?>

<a href="index.php">もどる</a>