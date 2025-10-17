<?php
/*
function es($data, $charset = 'UTF-8')
{
  if (is_array($data)) {
    return array_map(__METHOD__, $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}

*/

function cken(array $data)
{
  $resul = true;
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)) {
      $resul = false;
      break;
    }
  }
  return $resul;
}

$tsuri = mb_convert_encoding("釣り", "Shift_JIS");
$myData = [
  "name" => "太郎",
  "age" => 25,
  "hobby" => ["散歩", "釣り", "ドライブ"],
];

if (cken($myData)) {
  echo "正しい";
} else {
  echo "違う";
}

/*

function h($data)
{
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}


$myCode = "<h1>テスト１</h1>";
$myArray = [
  'a' => '<p>赤</p>',
  'b' => "<script>alert('hello')</script>",
];

// echo es($myCode);

print_r(es($myArray));
*/