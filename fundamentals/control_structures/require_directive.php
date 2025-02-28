<?php

// require('require_file.php');

// the following also works and is recommended
// require 'require_file.php';

// Example use of require directive

// require "requireable.php";

// $result = say_hello();
// echo $result;

// Always use __DIR__ to define path relative to your current __FILE__. 
// (Or another setting that is originally based on __DIR__/__FILE__)

try {
    require __DIR__ . "/requireable.php"; // best practice
    // require "requireable.php"; // bad practice
    $result = say_hello();
    echo $result;
} catch (Throwable $th) {
    echo $th->getMessage();
}

// Summary

// Generally use require directive to include a file that is required for the script to run.
// If the file is not found, require directive will throw a fatal error and stop the script.
// Always use __DIR__ to define path relative to your current __FILE__.
// Use try-catch block to handle the error thrown by require directive.
// Use require directive when you want to include a file that is required for the script to run.