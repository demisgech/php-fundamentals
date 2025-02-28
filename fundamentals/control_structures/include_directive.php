<?php

// include("includeable.php");
// include "includeable.php"; //also works
// include __DIR__ . "/includeable.php"; //also works
include dirname(__FILE__) . "/includeable.php"; //also works
echo say_hello();

// summary
// include directive is used to include a file in the current file
// If the file is not found, include() produces a warning but the script will continue to execute.
// If the file is not found, require() produces a fatal error and the script will stop executing.
