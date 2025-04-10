<?php

function sum($first_number, $second_number): float
{
    return $first_number + $second_number;
}

$result = sum(30, 50);
echo ("Sum: ".$result);

$users = [
    [
        "id" => 1,
        "name" => "Demis",
        "email" => "demisgech@gmail.com"
    ],
    [
        "id" => 2,
        "name" => "Dejen",
        "email" => "dejen@gmail.com"
    ]
];


function show_result($value)
{
    echo ("\n".$value);
}

foreach ($users as $user):
    foreach ($user as $key => $value)
        show_result($key." : ".$value);
endforeach;
function square($x)
{
    return $x * $x;
}

$sq = square(100);
echo ("\n X: ".$sq);

$customers = [
    ['id' => 1, 'name' => 'Demis', "email" => 'demisgech@gmail.com'],
    ['id' => 2, 'name' => 'Daniel', "email" => 'daniel@gmail.com'],
    ['id' => 3, 'name' => 'Haile', "email" => 'haile@gmail.com'],
];

function map_value($arrs, $key)
{
    return array_map("return_name", $arrs);
}

function return_name($item)
{
    return $item['name'];
}

$customers_name = map_value($customers, "name");

foreach ($customers_name as $key => $value)
    echo "\n".$value;

function do_map_lambda($arrs, $key)
{
    return array_map(function ($item) use ($key) {
        return $item[$key];
    }, $arrs);
}

$customers_name = do_map_lambda($customers, 'name');
echo 'Lambda Mapping';
foreach ($customers_name as $key => $value)
    echo "\n".$value;

$customers_email = do_map_lambda($customers, "email");
echo "\n Customers email";
foreach ($customers_email as $key => $value)
    echo "\n".$value;


$product = fn ($x, $y) => $x * $y;
echo ("Product: ".$product(20, 20));


echo "\n JSON_PRETTY_PRINT \n";
echo json_encode($users,JSON_PRETTY_PRINT);