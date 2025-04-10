<?php

use Maths\Mathematics;

spl_autoload_register(function ($class) {
    $baseDirectory = __DIR__ . "/";
    $file = $baseDirectory . str_replace("\\", "/", $class . ".php");
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo $file . " is not found";
    }
});


$sum = Mathematics::add(10, 30);
echo "Sum: $sum";