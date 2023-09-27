<?php

$text = "The quick brown fox jumps over the lazy dog.";

function print_lower_case($text)
{
    return strtolower($text) . "\n";
}

echo print_lower_case($text);

function replaceBrownWithRed($Fulltext, $search, $replace)
{
    return str_replace($search, $replace, $Fulltext);
    
}

echo replaceBrownWithRed($text, "brown", "red");

