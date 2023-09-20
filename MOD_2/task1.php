<?php

function evenNumbersByForLoop($init, $end_point, $step)
{
    echo "Output using For Loop \n";
    for ($init; $init <= $end_point; $init += $step) {
        echo ($init % 2 == 0) ? $init . "\n" : "";
    }
}

function evenNumbersByWhileoop($init, $end_point, $step)
{

    echo "Output using While Loop \n";
    while ($init <= $end_point) {
        echo ($init % 2 == 0) ? $init . "\n" : "";
        $init += $step;
    }
}

function evenNumbersByDoWhileoop($init, $end_point, $step)
{

    echo "Output using DO While Loop \n";
    do {
        echo ($init % 2 == 0) ? $init . "\n" : "";
        $init += $step;
    } while ($init <= $end_point);
}




evenNumbersByForLoop(1, 20, 2);
evenNumbersByWhileoop(1, 20, 2);
evenNumbersByDoWhileoop(1, 20, 2);
