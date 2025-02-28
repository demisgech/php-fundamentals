<?php
// the dirname() function returns the directory name of the path
// Returns a parent directory's path Given a string containing 
// the path of a file or directory, this function will return 
// the parent directory's path that is levels up from the current directory.

try {
    // require_once dirname(__FILE__) . "/requireable.php";

    // $result = say_hello();
    // echo $result;

    // require_once __DIR__ . "/requireable.php"; // best practice
    require_once "requireable.php"; // works but not best practice
    $result = say_hello();
    echo $result;

} catch (Throwable $th) {
    echo "Error: " . $th->getMessage();
}

// summary
// require_once is used to include a file in the script only once
// If the file has already be included, it will not be included again
// It throws a fatal error if the file is not found