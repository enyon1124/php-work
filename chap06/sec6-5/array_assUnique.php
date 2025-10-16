<?php
function array_addUnipue(&$array, $value)
{
  if (in_array($value, $array)) {
    return false;
  } else {
    $array[] = $value;
    return true;
  }
}

$myList = ["blue", "greem"];
array_addUnipue($myList, "white");
array_addUnipue($myList, "blue");
array_addUnipue($myList, "red");
array_addUnipue($myList, "white");
print_r($myList);
