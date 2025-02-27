<?php
$x = 10;
$y = 11;

// Arithmetic Operators
$result = $x + $y; // 21
$result = $x - $y; // -1
$result = $x * $y; // 110
$result = $x / $y; // 0.90909090909091 (float)
$result = $x % $y; // 10 (remainder of $x divided by $y)
$result = $x ** $y; // 100000000000 (x raised to the power of y)

$x = 1;
$increment = $x++; // = 1 // post-increment
$increment = ++$x; // = 3 // pre-increment

$decrement = --$x; // = 2 // pre-decrement
$decrement = $x--; // = 1 // post-decrement