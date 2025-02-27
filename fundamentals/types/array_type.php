<?php

// Array type(array)

$arrayType = [1, false, "hello", 19.2];
$arrayType = array(1, false, "hello", 19.2);
$arrayType = array("key" => "value", 1 => "value");
$arrayType = ["key" => "value", 1 => "value"];

echo gettype($arrayType);
echo "\n";
