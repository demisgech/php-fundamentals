<?php
/* 
* The declare construct in PHP is used to set execution directives for a block of code.
* It controls certain aspects of code execution at the script level. 
* The most common use case for declare is to enable 
strict type checking for function parameters and return values.
*/

// Strict types directive
// The strict_types directive is used to enforce strict type checking for function parameters and return values.
declare(strict_types=1); // For type checking
function add(int $a, int $b) {
    return $a + $b;
}

// These will throw a TypeError
// $result = add('1', 2);
// $result = add(1.0, 2);

// correct usage
$result = add(1, 2);
echo $result;

// Ticks directive for signal handling
// The ticks directive is used to register a callback function that gets executed periodically during script execution.
// asynchronous signal handling can be implemented using ticks.

declare(ticks=1); // For signal handling
/* Generate a signal */
// Ticks: Ticks are a way to register a callback function 
// that gets executed every few "tick" events, which are basic units of PHP execution. 
// This can be useful for profiling, debugging, 
// or implementing some custom logic that should run periodically.

// Signal handler function
function signal_handler() {
    echo "Signal handler called \n";
}
echo "Signal Registered\n";

register_tick_function("signal_handler");

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

unregister_tick_function('signal_handler');
echo "Signal Unregistered\n";

// Encoding directive
// The encoding directive is used to set the character encoding for the script.
// It is used to specify the character encoding for the script.
// This can be useful when working with different character sets 
// and ensuring that the script is interpreted correctly.

// declare(encoding='ISO-8859-1'); // For character encoding

declare(encoding='UTF-8');
echo "Character encoding set to UTF-8\n";


// It's possible to set directives at one time if every directive is supported.
declare(strict_types=1, ticks=1, encoding='UTF-8');