<?php

// Task 3: Array Sorting  


// Create an array called $grades with the following values: 85, 92, 78, 88, 95. 
// Write a PHP function which takes "$grades" as an argument 
// to sort the array in descending order 
// and print the sorted grades as array.

$grades = [85, 92, 78, 88, 95];

function sortGrades($grades_array)
{
    usort($grades_array, "descGrades");
    print_r($grades_array);
}

function descGrades($grade1, $grade2)
{
    if ($grade1 > $grade1) {
        return -1;
    } elseif ($grade1 < $grade2) {
        return 1;
    } else {
        return 0;
    }
}

sortGrades($grades);
