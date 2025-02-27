<?php
function functioWithNeverReturn(): never
{// doSomething
    exit();//if we comment this line, php throws fatal error
}
function functioWithSomeReturn(): never
{
    exit();
}



function terminate(string $message): never
{
    echo $message;
    exit(1);
}

function checkValue(int $value): void
{
    if ($value < 0) {
        terminate("Terminating: Negative value provided.");
    }
    // Further processing
}

checkValue(-1); // Output: Terminating: Negative value provided.




function reportError(string $message): never
{
    throw new Exception($message);
}

function process(int $value): void
{
    if ($value < 0) {
        reportError("Value must be non-negative.");
    }
    // Further processing
}

try {
    process(-1);
} catch (Exception $e) {
    echo $e->getMessage(); // Output: Value must be non-negative.
}


