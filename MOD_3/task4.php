<?php

// Task 4: Multidimensional Array


// Create a multidimensional array called $studentGrades 
// to store the grades of three students. 
// Each student has grades for three subjects: Math, English, and Science. 
// Write a PHP function which takes "$studentGrades" as an argument to calculate 
// and print the average grade for each student.

// initiating empty array
$studentGrades = [];

array_push($studentGrades, [
    'name' => 'Sadi',
    'marks' => ['Math' => 80, 'English' => 78, 'Science' => 63],
    'Grade' => ''
]); //pushing elemnts into array,just for pracrice
array_push($studentGrades, [
    'name' => 'Abdullah',
    'marks' => ['Math' => 83, 'English' => 82, 'Science' => 87],
    'Grade' => ''
]); //just for pracrice
array_push($studentGrades, [
    'name' => 'Naima',
    'marks' => ['Math' => 32, 'English' => 96, 'Science' => 45],
    'Grade' => ''
]); //just for pracrice


// function that takes students marks array to print grades
function cal_grades($studentGrades)
{
    foreach ($studentGrades as $student) {

        $grade =  grade_from_avg($student['marks']['Math'], $student['marks']['English'], $student['marks']['Science']);

        $student['Grade'] = $grade; // assigning grade to related studenrs 'grade' key
        print_r($student); // output
    }
}

function grade_from_avg(...$num)
{

    //function that takes any number of marks to find the avg marks
    $total_subjects = func_num_args(); // finding how many numbers (arguments)    passed to the function

    $marks_list = func_get_args(); // finding all the numbers (arguments)    passed to the function

    $total_marks = 0;
    for ($count = 0; $count < $total_subjects; $count++) {
        $total_marks += $marks_list[$count];
    }
    $avg = $total_marks / $total_subjects;

    $passed_marks_count = array_filter($marks_list, "passedSubjects"); //checking for any failed mark with Callback function, if found at least one failed mark, means student failed

    $passed_subjects_count = count($passed_marks_count);

    if ($passed_subjects_count < $total_subjects) {
        // if passed_subjects_count is less than count of total_subjects, it means students has failed in at least one subject, 
        // so returnig F grade
        return "F";
    } elseif ($avg < 60) {
        return "D";
    } elseif ($avg >= 60 && $avg < 70) {
        return "C";
    } elseif ($avg >= 70 && $avg < 80) {
        return "B";
    } elseif ($avg >= 80 && $avg < 90) {
        return "C";
    } else {
        return "A";
    }
}

function passedSubjects($mark)
{
    return $mark < 33 ? false : true; // callback function to filter only passed marks in array
}

cal_grades($studentGrades);
// pulling the trigger