<?php

function passByValue($param) {
    $param += 1;
    echo "Inside passByValue function: $param\n";
}
$param = 10;
passByValue($param);
echo $param . "\n"; // 10 is printed, number is not changed

function passByReference(&$param) {
    $param += 1;
    echo "Inside passByReference function: $param\n";
}

$param = 10;
passByReference($param);
echo $param . "\n"; // 11 is printed, number is changed

function restParameter(...$param) {
    echo "Inside restParameter function: ";
    foreach ($param as $value) {
        echo "$value ,";
    }
    echo "\n";
}

restParameter(1, 2, 3, 4);
restParameter(1, 2, 3, 4, 4, 5, 6, 7, 8, 9, 10);


function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$sumResult = sum(1, 2, 3, 4);
echo $sumResult . "\n";

function reduce(array $numbers, float|int $initialValue = 0): float|int {
    $accumulator = $initialValue;
    foreach ($numbers as $number)
        $accumulator += $number;
    return $accumulator;
}

$result = reduce([1, 2, 3, 4, 5]);
echo "Sum : $result\n";

$result = reduce([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
echo "Sum : $result\n";

$result = range(1, 10); // [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print_r($result);

$rangeWithStep = range(1, 10, 2); // [1, 3, 5, 7, 9]
print_r($rangeWithStep);

function functionAlsoReturnAnotherFuncton() {
    return function () {
        return "Return some value";
    };
}

$returnedFunction = functionAlsoReturnAnotherFuncton();
echo $returnedFunction() . " \n";
