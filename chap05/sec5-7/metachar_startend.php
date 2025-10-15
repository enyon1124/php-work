<?php

$pattern = "/^山..子$/u";
var_dump(preg_match($pattern, "山田智子"));
var_dump(preg_match($pattern, "山田あさ子"));
var_dump(preg_match($pattern, "山崎貴美"));
