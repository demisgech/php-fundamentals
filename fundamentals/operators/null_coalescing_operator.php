<?php


// Null Coalescing Operator
// $result = $value ?? $defaultValue;
$x = null;
$result = $x ?? "Default value";
echo $result; // Default value

$x = "original value";
$result = $x ?? "Default value";
echo $result; // original value

$username = $_GET["username"] ?? "Guest";
echo "\nusername: ".$username;

$data = [
    'name' => 'Alice',
    'age' => 30
];

// Using null coalescing operator
$name = $data['name'] ?? 'Unknown';
$city = $data['city'] ?? 'Unknown';

echo "Name: ".$name; // Output: Name: Alice
echo "City: ".$city; // Output: City: Unknown
