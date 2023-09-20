<?php


function fibonacci_series_with_func($num_limit)
{
    echo "Task 4: Fibonacci Series printing using a Function
    Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
    this 15 as an argument of a function and use a for loop to generate these numbers and print
    them by calling the function.
    
     \n";


    $count = 1;

    $fibonacci = [0, 1];


    for ($count; $count <= $num_limit - 2; $count++) {

        $last_index = count($fibonacci) - 1;

        $next_number = $fibonacci[$last_index - 1] + $fibonacci[$last_index];

        array_push($fibonacci, $next_number);
    }

    foreach ($fibonacci as $numbers) {
        echo $numbers . "\n";
    }
}


fibonacci_series_with_func(15);
