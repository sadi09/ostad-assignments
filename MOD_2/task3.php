<?php


function breakOnCondition($num_limit, $val_limit)
{
    echo "Task 3: Break on Condition
    Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
    Fibonacci number is greater than 100, break out of the loop using the break statement. \n";


    $count = 1;

    $fibonacci = [0, 1];


    for ($count; $count <= $num_limit - 2; $count++) {

        $last_index = count($fibonacci) - 1;

        $next_number = $fibonacci[$last_index - 1] + $fibonacci[$last_index];

        if ($next_number > $val_limit) {
            break;
        } else {
            array_push($fibonacci, $next_number);
        }
    }

    foreach ($fibonacci as $numbers) {
        echo $numbers."\n";
    }
}


breakOnCondition(10, 100);
