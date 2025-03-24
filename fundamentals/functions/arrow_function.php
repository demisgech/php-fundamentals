<?php
// Arrow functions are more concise way of writing anonymous functions

$anonymousFunction = function () {
    return "Anonymous function";
};

echo $anonymousFunction() . "\n";
// the above anonymous function can be written as arrow function
// syntax : fn(<arguments>) => <expression>;

$arrowFunction = fn() => "Arrow function";
echo $arrowFunction() . "\n"; // Arrow function
function add($a, $b) {
    return $a + $b;
}

function doSum(array $numbers, callable $callback) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum = $callback($sum, $number);
    }
    return $sum;
}

$getSum = doSum([1, 2, 3, 4, 5], 'add'); // 15
echo "Sum: " . $getSum . "\n";

$getSum = doSum([1, 2, 3, 4, 5], fn($a, $b) => $a + $b); // 15
echo "Sum: " . $getSum . "\n";

function doProduct(array $numbers, callable $callback) {
    $product = 1;
    foreach ($numbers as $number)
        $product = $callback($product ?? 1, $number);
    return $product;
}

function multiply($a, $b) {
    return $a * $b;
}

$getProduct = doProduct([1, 2, 3, 4, 5], 'multiply'); // 120   
echo "Product : $getProduct \n";

$getProduct = doProduct([1, 2, 3, 4, 5], fn($a, $b) => $a * $b); // 120   
echo "Product : $getProduct \n";

function simpleProduct(array $numbers, callable $callback) {
    return array_reduce($numbers, $callback, 1);
}

$getSimpleProduct = simpleProduct([1, 2, 3, 4, 5], 'multiply'); // 120
echo "Simple Product: $getSimpleProduct \n";

$getSimpleProduct = simpleProduct([1, 2, 3, 4, 5], fn($a, $b) => $a * $b); // 120
echo "Simple Product: $getSimpleProduct \n";

// Arrow function with multiple statements
$sum = fn($a, $b) => ($a + $b) * 2;


function reducer(array $numbers, callable $callback, int $initialValue): int|float {
    return array_reduce($numbers, $callback, $initialValue);
}

$sumReducer = reducer([1, 2, 3, 4], fn($a, $b) => $a + $b, 0);
echo "Sum Reducer:$sumReducer \n";

$productReducer = reducer([1, 2, 3, 4], fn($a, $b) => $a * $b, 1);
echo "Product reducer: $productReducer \n";

$negativeSum = reducer([1,2,3,4,5] ,fn($a,$b)=> $a - $b);
echo "Negative Sum: $negativeSum";