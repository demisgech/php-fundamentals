<?php

// include_once("includeable.php");
// include_once "includeable.php"; // as of PHP 5.3.0
// include_once __DIR__ . "/includeable.php";

include_once dirname(__FILE__) . "/includeable.php";
echo say_hello();

// summary
// include_once directive is used to include a file only once in a PHP script.
//  If the file is already included, it will not be included again. 
// The include_once directive is identical to include except that
//  PHP will check if the file has already been included, 
// and if so, not include (require) it again.
// if the file is not found, a warning will be generated. and the sctipt will continue to run.
// The include_once directive is useful when you want to 
// include a file only once, and you are not sure 
// if the file has already been included. 
// This can prevent problems such as 
// function redefinitions, 
// variable value reassignments, etc. 
// that can occur when including the same file multiple times.