<?php

// foreach loop

foreach ($iterable_expression as $value) {
    # statements
}

// Example 1
$colors = array('red', 'green', 'blue'); // the old way
$colors = ['red', 'green', 'blue']; // the new way

foreach ($colors as $color) {
    echo $color . "\n";
}

// another syntax

foreach ($iterable_expression as $key => $value) {
    #statements
}

$keyValuePair = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
];

foreach ($keyValuePair as $key => $value) {
    echo $key . " => " . $value . "\n";
}

// yet another syntax

foreach ($iterable_expression as $value):
    #statements
endforeach;

foreach ($iterable_expression as $key => $value):
    #statements
endforeach;

foreach ($keyValuePair as $key):
    echo $key . " => " . $keyValuePair[$key] . "\n";
endforeach;

foreach ($keyValuePair as $key => $value):
    echo $key . " => " . $value . "\n";
endforeach;


// array unpacking using foreach loop
$numbers = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
foreach ($numbers as [$x, $y, $z]):
    echo "x = $x, y = $y, z = $z\n";
endforeach;

// the above code outputs would be the following
// x = 1, y = 2, z = 3
// x = 4, y = 5, z = 6  
// x = 7, y = 8, z = 9

$users = [
    [
        "name" => "John Doe",
        "age" => 30,
        "email" => "johndoe@gmail.com"
    ],
    [
        "name" => "Demis Gech",
        "age" => 80,
        "email" => "demisgech@gmail.com"
    ],
];

foreach ($users as $user):
    echo "{ name: " . $user["name"] . ", age: " . $user["age"] . ", email: " . $user["email"] . " }\n";
endforeach;

// Using array unpacking (destructuring) 
foreach ($users as ["name" => $name, "age" => $age, "email" => $email]):
    echo "{ name: " . $name . ", age: " . $age . ", email: " . $email . " }\n";
endforeach;

// Key Takeaways
// ✅ Associative arrays cannot be destructured like indexed arrays.
// ✅ Use direct access ($user["name"]) or proper associative destructurin