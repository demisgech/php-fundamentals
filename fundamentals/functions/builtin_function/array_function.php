<?php

declare(strict_types=1);

$simpleArray = array(1, 2.2, "Hello", true, null);

print_r($simpleArray);

$collection = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
];


var_dump(array_all($collection, fn($value) => strlen($value) < 6)); // bool(false)
var_dump(array_all($collection, fn($value) => strlen($value) < 12)); // bool (true)

var_dump(array_all($collection, fn($value, $key) => is_string($key))); // bool(true)

var_dump(array_any($collection, fn($value) => strlen($value) > 5)); // bool(true)
var_dump(array_any($collection, fn($value) => strlen($value) < 3)); // bool(false)
var_dump(array_any($collection, fn($value, $key) => !is_string($key))); // bool(false)

$numbers = [1, 2, 3, 4, 5, 6, 7];
print_r($numbers);

// filter
$oddNumbers = array_filter($numbers, fn($value) => $value % 2 === 1);
print_r($oddNumbers);

$evenNumbers = array_filter($numbers, fn($value) => $value % 2 === 0);
print_r($evenNumbers);

// map
$getNumberSquare = array_map(fn($value) => $value ** 2, $numbers);
print_r($getNumberSquare);

// reduce
$getSum = array_reduce($numbers, fn($a, $b) => $a + $b, 0);
echo "Sum: $getSum \n"; // Sum: 20

$product = array_reduce($numbers, fn($a, $b) => $a * $b, 1);
echo "Product: $product \n"; // Product: 5040

$first = [1, 2, 3, 4, 5];
$second = [2, 4, 5, 6, 7, 8];

// Working with set

// Intersection
$commonElement = array_intersect($first, $second);
print_r($commonElement);

// Difference

$difference = array_diff($first, $second);
print_r($difference); // [1, 3]

$difference = array_diff($second, $first);
print_r($difference); // [6,7,8]

// Union

$mergedArray = array_merge($first, $second);
$getUniqueElement = array_unique($mergedArray); // remove duplicate
$combined = array_merge($getUniqueElement); // Merge them

// We can do all the above in one line as follow:
$combined = array_merge(array_unique(array_merge($first, $second)));
print_r($combined);

// Semetric difference

$semetricDifference = array_merge(array_diff($first, $second), array_diff($second, $first));
print_r($semetricDifference);

// check subset

$set1 = [1, 2];
$set2 = [1, 2, 3, 4];
$isSubset = !array_diff($set1, $set2);
var_dump($isSubset);// bool(true)

$findElement = array_find($numbers, fn($value) => $value <= 2);
print_r($findElement);// 1
$findElement = array_find($numbers, fn($value) => $value > 2);
print_r($findElement);// 3
