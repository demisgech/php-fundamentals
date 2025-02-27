<?php
// union type
function mixedTypeFunction(): object|array|string|float|int|bool|null
{
    return 10;
}

echo gettype(mixedTypeFunction()); // Integer
echo "\n";
