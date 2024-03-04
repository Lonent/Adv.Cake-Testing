<?php
require_once 'index.php'; 

function assertEqual($actual, $expected) {
    if ($actual === $expected) {
        echo "Test passed\n";
    } else {
        echo "Test failed. Expected: $expected, Actual: $actual\n";
    }
}

assertEqual(ReverseWord::Reversing('Hello World!'), '!dlroW olleH');

assertEqual(ReverseWord::Reversing(''), '');

assertEqual(ReverseWord::Reversing('a'), 'a');

assertEqual(ReverseWord::Reversing('     '), '     ');

assertEqual(ReverseWord::Reversing('hello'), 'olleh');
?>
