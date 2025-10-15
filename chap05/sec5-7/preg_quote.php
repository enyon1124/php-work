<?php

$escaped = preg_quote("http://sample.com/php/", "/");
echo $escaped;

$pattern = "/{$escaped}/u";
echo $pattern, PHP_EOL;
var_dump(preg_match($pattern, "URLはhttp://sample.com/php/です"));
var_dump(preg_match($pattern, "URLはhttp://sample.com/swift/です"));