<?php

function skip_multiples_of_five($init, $end_point, $step)
{
    echo "Task 2: Skip Multiples of 5
    Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
    loop encounters a multiple of 5, it should skip that number using the continue statement and
    continue to the next iteration. \n";


    for ($init; $init <= $end_point; $init += $step) {
        if ($init % 5 == 0) {
            continue;
        }
        echo $init . "\n";
    }
}


skip_multiples_of_five(1, 50, 1);