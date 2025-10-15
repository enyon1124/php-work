<?php
$data = [
  "ID" => "TR123",
  "商品名" => "ピークハント",
  "価格" => "14500",
];
echo "<table>", PHP_EOL;
foreach ($data as $key => $value) {
  echo "<tr>";
  echo "<th>{$key}</th><td>{$value}</td>";
  echo "</tr>", PHP_EOL;
}
echo "</table>", PHP_EOL;
