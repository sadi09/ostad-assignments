<?php

// Create an array called $numbers containing the numbers 1 to 10. 
//Write a PHP function which takes the "$numbers" array as an argument 
//to remove the even numbers from the array and print the resulting array.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function filterOutEvenNumbers($num_array)
{
    return array_filter($num_array, "isEven");
}

function isEven($number)
{
    return $number % 2 == 0 ? true : false;
}

$even_numbers = filterOutEvenNumbers($numbers);
print_r($even_numbers);
