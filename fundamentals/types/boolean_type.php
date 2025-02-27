<?php

// Boolean type(bool): true or false value

$booleanType = false;
// $booleanType = 10 > 9; // true
$booleanType = 10 != 9; // true
$booleanType = 10 == '10'; // true
$booleanType = 10 === '10'; // false

echo gettype($booleanType); // boolean
echo "\n";
