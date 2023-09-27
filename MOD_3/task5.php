<?php

// Task 5: Password Generator


// Create a PHP function called generatePassword($length) 
// that generates a random password of the specified length. 
// The password should include lowercase letters, uppercase letters, numbers, 
// and special characters (!@#$%^&*()_+). 

// Write a PHP program to generate a password 
// with a length of 12 characters using this function and print the password.

function generatePassword($length)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';

    $password = '';
    $chars_length = strlen($chars) - 1;

    for ($index = 0; $index < $length; $index++) {
        $password[$index] = $chars[rand(0, $chars_length)];
    }

    echo "Password: {$password}";
}

generatePassword(12);
