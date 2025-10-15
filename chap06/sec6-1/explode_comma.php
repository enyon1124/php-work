<?php
$data = "赤井一郎, 伊藤 淳, 上野信二";
$delimiter = ",";
$namelist = explode($delimiter, $data);
print_r($namelist);
