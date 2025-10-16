<?php
$data = ["image7", "image12", "image1"];
sort($data, SORT_NATURAL);
print_r($data);

for ($i = 0; $i < count($data); $i++) {
  echo $data[$i] . '';
}
