<?php
Class ReverseWord{

static public function Reversing($string){
    
    $str_split = str_split($string);
    $reverse_array = array_reverse($str_split);
    $result = implode($reverse_array);

    return $result;
}
}

$reverse_string = ReverseWord::Reversing('Hello World!');

echo $reverse_string;
 
