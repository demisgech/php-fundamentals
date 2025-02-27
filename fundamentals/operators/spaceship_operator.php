<?php

// Spaceship operator
$x = 10;
$y = 13;
$result = $x <=> $y;
echo "\n Spaceship result: ".$result; // -1

// The spaceship operator returns:
// -1 if $a is less than $b
// 0 if $a is equal to $b
// 1 if $a is greater than $b

// Comparing integers
echo 1 <=> 2; // Output: -1
echo 2 <=> 2; // Output: 0
echo 3 <=> 2; // Output: 1

// Comparing floats
echo 1.5 <=> 2.5; // Output: -1
echo 2.5 <=> 2.5; // Output: 0
echo 3.5 <=> 2.5; // Output: 1

// Comparing strings
echo "apple" <=> "banana"; // Output: -1
echo "banana" <=> "banana"; // Output: 0
echo "cherry" <=> "banana"; // Output: 1

// Practical use case : Sorting
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5];

usort($numbers, function ($a, $b) {
    return $a <=> $b;
});

print_r($numbers);