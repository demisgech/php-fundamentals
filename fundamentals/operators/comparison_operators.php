<?php

// Comparison Operators
$x = 10;
$y = 11;
$result = $x == $y; // false
$result = $x === $y; // false
$result = $x != $y; // true
$result = $x <> $y; // true
$result = $x !== $y; // true
$result = $x < $y; // true
$result = $x > $y; // false
$result = $x >= $y; // false
$result = $x <= $y; // true

$x = "10";
$y = 10;

// loose equality operator => checks on for the value 
$result = $x == $y; // true
$result = $x != $y; // false

// strict equality operator => checks for value and type as well

$result = $x === $y; // false
$result = $x !== $y; // true
