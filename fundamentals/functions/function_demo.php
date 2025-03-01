<?php

// Function syntax

// function functionName($arg1...) : returnType {
//     // Code to be executed
//     // return statement
// }

// function greet($name) {
//     echo "Hello, $name!";
// }
// the following is exactly the same as above
function greet($name): void {
    echo "Hello, $name! \n";
}

greet("Demis"); // Output: Hello, Demis!
greet("John Smith"); // Output: Hello, John Smith!


canBeCalledAnywhere();

function canBeCalledAnywhere() {
    echo "I can be called anywhere! \n";
}
canBeCalledAnywhere(); // Output: I can be called anywhere!

function outerFunction() {
    echo "I am an outer function! \n";
    function innerFunction() {
        echo "I am an inner function! \n";
    }
    innerFunction();
}
outerFunction();

function functionWithDefaultArguments($name = "John") {
    echo "Hello, $name! \n";
}

functionWithDefaultArguments(); // Output: Hello, John!


function sum(int $firstNumber, int $secondNumber): int {
    return $firstNumber + $secondNumber;
}

function average(int $firstNumber, int $secondNumber): int {
    return sum($firstNumber, $secondNumber) / 2;
}

function getFullName(string $firstName, string $lastName): string {
    return $firstName . " " . $lastName;
}

$fullName = getFullName("Demis", "Getachew");
echo $fullName . "\n"; // Output: Demis Getachew

function getCircleArea(float|int $radius = 0): float|int {
    return round(pow($radius, 2) * pi(), 2);
}

$circleArea = getCircleArea(10);
echo "Circle Area: $circleArea \n"; // Output: Circle Area: 314.16


function functionTakesArray(array $arrays = []): void {
    foreach ($arrays as $array):
        print_r($array . "\n");
    endforeach;
}

$numbers = [1, 2, 3, 4];
functionTakesArray($numbers);

function functionReturnArray(int $limit = 0): array {
    $numbers = [];
    for ($i = 0; $i < $limit; $i++)
        $numbers[] = $i;
    return $numbers;
}

$returnedNumberArray = functionReturnArray(10);
foreach ($returnedNumberArray as $number):
    echo $number . "\n";
endforeach;