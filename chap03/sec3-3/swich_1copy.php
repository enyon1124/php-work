<?php
$color = "blue";
$price = match ($color) {
  "green"   => 120,
  "red"     => 140,
  "blue"    => 160,
  default   => 100,
};
echo "{$color}は、{$price}円。";