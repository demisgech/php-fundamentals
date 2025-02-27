<?php

function iteratorFunction(): Iterator {
    yield 1;
    yield 2;
    yield 3;
}

$result = iteratorFunction(); // Generator object
print_r($result);

echo "{ Index => value }\n";
foreach ($result as $key => $value) {
    echo "{ " . $key . " => " . $value . " }\n";
}

function generatorFunction(): Generator {
    yield 1;
    yield 2;
    yield 3;
}
print_r(generatorFunction());// Generator object
$result = generatorFunction();
echo "{ Index => value }\n";
foreach ($result as $key => $value) {
    echo "{ " . $key . " => " . $value . " }\n";
}

$result = iteratorFunction();
while ($result->valid()) {
    $current = $result->current();
    $result->next();
    echo $current . " ";
}

?>