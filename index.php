<?php

$string = "Hello!";

$str_split = str_split($string);
$reverse_array = array_reverse($str_split);
$result = implode($reverse_array);

echo $result;
 