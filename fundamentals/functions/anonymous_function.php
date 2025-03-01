<?php

// Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callable parameters, but they have many other uses.
// Anonymous functions are implemented using the Closure class.

// Example 1: Simple anonymous function example
$greet = function ($name) {
    printf("Hello %s\r\n", $name);
};
$greet("Demis");

// Example 2: Use of variables from the parent scope
$message = "Hello"; // Define a variable in the parent scope
$example = function () use ($message) {
    var_dump($message);
}; // Inherit $message
$example();

echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world') . " \n";  // outputs helloWorld
// outputs helloWorld

$nestedAnonymousFunction = function () {
    return function () {
        return "Anonymous functon inside another anonymous function";
    };
};

$returnedAnonymousFunction = $nestedAnonymousFunction();
echo $returnedAnonymousFunction() . " \n";