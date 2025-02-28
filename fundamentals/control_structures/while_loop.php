<?php

// while loop 
while ($expression) {
    #statement
}

// Example 1
$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

// Another syntax
while ($expression):
    #statement
endwhile;
// example 2
$j = 0;
while ($j < 10):
    echo $j . '<br>';
    $j++;
endwhile;