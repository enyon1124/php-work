<?php
$id = "peace";
$length = strlen($id);
for ($i = 0; $i < $length; $i++) {
  $chr = $id[$i];
  echo "$i - $chr", PHP_EOL;
}
