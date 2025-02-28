<?php

// The match statement is similar to the switch statement 
// in that it compares an expression to a list of values.

// Syntax
// $return_value = match ($subject_expression) {
//     'value1' => 'return_value1',
//     'value2' => 'return_value2',
//     'value3' => 'return_value3',
//     default => 'return_value_default',
// };

// Example
$fruit = "apple";

// using switch statement
switch ($fruit) {
    case "apple":
        echo "It is an apple";
        break;
    case "banana":
        echo "It is a banana";
        break;

    case "cherry":
        echo "It is a cherry";
        break;
    default:
        echo "It is not apple, banana or cherry";
        break;
}

echo "\n";

// using match statement
$fruit = "apple";

$result = match ($fruit) {
    "apple" => "It is an apple",
    "banana" => "It is a banana",
    "cherry" => "It is a cherry",
    default => "It is not apple, banana or cherry",
};

echo $result;

echo "\n";

$age = 25;

$result = match (true) {
    $age < 3 => "Baby",
    $age < 13 => "Child",
    $age >= 13 && $age <= 19 => "Teenager",
    $age > 19 && $age <= 40 => "Young Adult",
    $age > 40 => "Old Adult",
    default => "Invalid age",
};

echo $result . "\n";

$x = '10';
switch ($x) {
    case 10:
        echo "It is 10";
        break;
    default:
        echo "It is not 10";
}

// Output: It is 10
echo "\n";

$x = '10';


$result = match ($x) {
    10 => "It is 10",
    default => "It is not 10",
};
echo $result . "\n"; // It is not 10

// Here is the difference between switch and match statement
// The match statement is strict in comparison,
// it compares the type of the expression and the value of the case.with the (===) and (!==) operator.
// However,
// The switch statement is loose in comparison,
// it compares only the value of the expression and the case. with the (==) and (!=)  operator.


function languageSpokenForRegion(array &$spoken_languages, $region): void {
    match ($region) {
        'Amhara' => $spoken_languages['Amharic'] = true,
        'Oromo' => $spoken_languages['Afaan Oromo'] = true,
        "Tigray" => $spoken_languages['Tigrigna'] = true,
        "Addis Ababa" => [
            $spoken_languages['Amharic'] = true,
            $spoken_languages['Tigrigna'] = true,
            $spoken_languages['Afaan Oromo'] = true,
        ],
        default => null
    };
}

$regions = [
    "Amhara",
    "Oromo",
    "Tigray",
    "Addis Ababa"
];

$spoken_languages = [
    "Amharic" => false,
    "Tigrigna" => false,
    "Afaan Oromo" => false,
];

foreach ($regions as $region):
    if ($region == "Addis Ababa"):
        languageSpokenForRegion($spoken_languages, $region);
        var_export($spoken_languages);
    endif;
endforeach;

// foreach ($regions as $region):
//     match ($region) {
//         'Amhara' => $spoken_languages['Amharic'] = true,
//         'Oromo' => $spoken_languages['Afaan Oromo'] = true,
//         "Tigray" => $spoken_languages['Tigrigna'] = true,
//         "Addis Ababa" => [
//             $spoken_languages['Amharic'] = true,
//             $spoken_languages['Tigrigna'] = true,
//             $spoken_languages['Afaan Oromo'] = true,
//         ]
//     };
// endforeach;

function is_leap($year): bool {

    return $year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0);

}
function days_in_month(string $month, $year): int {

    return match (strtolower(substr($month, 0, 3))) {

        'apr', 'jun', 'sep', 'nov' => 30, // chain multiple values also called OR condition

        'jan', 'mar', 'may', 'jul', 'aug', 'oct', 'dec' => 31,

        'feb' => is_leap($year) ? 29 : 28,

        default => throw new InvalidArgumentException("Bogus month"),

    };

}

$result = match ($x) {
    // This match arm:
    $a, $b, $c => 5,
// Is equivalent to these three match arms:
// $a => 5,
// $b => 5,
// $c => 5,
};

function fizzBuzz(int $number): string {
    return match ($number) {
        $number % 15 => "FizzBuzz",
        $number % 3 => "Fizz",
        $number % 5 => "Buzz",
        default => (string) $number,
    };
}

$result = fizzBuzz(10);
echo $result; // Buzz