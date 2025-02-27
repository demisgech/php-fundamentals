<?php
// Rules for naming variables in php
// 1. Variable name must start with a letter or an underscore
// 2. Variable name can only contain letters, numbers and underscores
// 3. Variable name is case sensitive
// 4. Variable name should be descriptive
// 5. Variable name should not start with a number
// 6. Variable name should not contain spaces
// 7. Variable name should not contain special characters
// 8. Variable name should not be a php reserved word


// Value types
$name = "Name goes here";

$foo = "bar";

// Reference types
$referrence = &$foo;
echo $referrence; // bar

$_underscore = "underscore";

// Naming conventions
// 1. camelCase => variables, functions, methods
// 2. PascalCase => Classes, Namespaces,Interfaces, Traits,
// 3. Snake_case => variables, functions, methods
// 4. UPPERCASE => Constants
$camelCase = "camelCase";
$PascalCase = "PascalCase";
$snake_case = "snake_case";

// Constants
define("CONSTANT", "constant value");
const PI = 3.14;
echo PI;

/**
 * clear concept of variable declaration rules and classification 

variable declaration rules:

1.start with dollar sign($)
2.first letter of variable name comes from a-zA-z_
3.next letters of variable name comes from a-zA-Z0-9_
4.no space,no syntex

classification of variables:

Variable are mainly Two types
1.Predefined Variable
2.User Define Variable

Predefined Variable
There are 12 predefined variables in php 8
1.$GLOBALS
2.$_SERVER
3.$_REQUEST
4.$_FILES
5.$_ENV
6.$_SESSION
7.$_COOKIE
8.$_GET
9.$_POST
10.$http_response_header
11.$argc
12.$argv

User Define Variable
User Define variable are 3 types
1.variable scope
2.variable variables
3.reference variable

Variable Scope
variable scope are 3 types
1.local scope
2.global scope
3.static variable
 */

// variable variables

$name = "hello";
$$name = "World";

echo $$name;