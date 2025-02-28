<?php

$a = 10;
$b = 11;

if ($a > $b) {
    echo "$a is greater than $b";
} else {
    echo "$a is not greater than $b";
}

if ($a > $b)
    echo "$a is greater than $b";
else
    echo "$a is not greater than $b";


// Short hand using ternary operator

$result = ($a > $b) ? "$a is greater than $b" : "$a is not greater than $b";
echo $result;

// Even more shortest syntax for terniary operator
$myValue = "My value";
$result = $myValue ?: "No value";
echo $result; // My value;

$myValue = "";
$result = $myValue ?: "No value";
echo $result; // No value;

$letterGrade = 'A';

if ($letterGrade == 'A')
    echo "Excellent";
else if ($letterGrade == "B")
    echo "Good";
else if ($letterGrade == "C")
    echo "Average";
else if ($letterGrade == "D")
    echo "Poor";
else if ($letterGrade == "F")
    echo "Fail";
else if ($letterGrade == "I")
    echo "Incomplete";
else
    echo "Invalid Grade";
// as recommendation
// use the [else if] for nested if else statements. i.e look the above example
// and use [elseif] for linear if else statements. i.e look the following example

$letterGrade = "B";
if ($letterGrade == "A")
    echo "Excellent";
elseif ($letterGrade == "B")
    echo "Good";
elseif ($letterGrade == "C")
    echo "Average";
elseif ($letterGrade == "D")
    echo "Poor";
elseif ($letterGrade == "F")
    echo "Fail";
elseif ($letterGrade == "I")
    echo "Incomplete";
else
    echo "Invalid Grade";

$age = 20;
$isMail = true;
if ($isMail)
    if ($age >= 100)
        echo "You are too old to vote";
    elseif ($age >= 18)
        echo "Eligible to Vote";
    else
        echo "You are too young to vote";
else
    echo "You are not illigible to vote";

// Shorter way to write the above code
if ($isMail && $age >= 100)
    echo "You are too old to vote";
elseif ($isMail && $age >= 18)
    echo "Eligible to Vote";
elseif ($isMail)
    echo "You are too young to vote";
else
    echo "You are not illigible to vote";

$x = 30;
if ($x > 10):
    echo "$x is greater than 10";
elseif ($x < 10):
    echo "$x is less than 10";
else:
    echo "$x is equal to 10";
endif;

// /* Incorrect Method: */
// if ($a > $b):
//     echo $a." is greater than ".$b;
// else if ($a == $b): // Will not compile.
//     echo "The above line causes a parse error.";
// endif;

/* Correct Method: */
if ($a > $b):
    echo $a . " is greater than " . $b;
elseif ($a == $b): // Note the combination of the words.
    echo $a . " equals " . $b;
else:
    echo $a . " is neither greater than or equal to " . $b;
endif;
?>


// easy way to execute conditional html / javascript / css / other language code with php if else:


<?php $is_logged_in = true; ?>
<?php if ($is_logged_in): ?>
    Your HTML / Javascript / CSS / Other Language Code Here
<?php else: ?>
    Your HTML / Javascript / CSS / Other Language Code Here
<?php endif; ?>

Example
<?php $is_logged_in = true; ?>
<?php if ($is_logged_in): ?>
    <h1>Welcome User</h1>
<?php else: ?>
    <h1>Welcome Guest</h1>
<?php endif; ?>

<?php

if ($a == 1 || $a == 2) {

    if ($b == 3 || $b == 4) {

        if ($c == 5 || $d == 6) {

            //Do something here.
        }
    }
}

// Shorter way to write the above code
if (($a == 1 || $a == 2) && ($b == 3 || $b == 4) && ($c == 5 || $c == 6)) {

    //do that something here.

}

?>