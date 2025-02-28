<?php

// for loop

for ($initialValue; $expression; $updator) {
    # statements
}

// example 1
for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++)
    ;

// another syntax
for ($expression1; $expression2; $expression3):
    #statements
endfor;

// example 5
for ($i = 0; $i < 10; $i++):
    echo $i . "\n";
endfor;

// Looping through letters
for ($i = 'a'; $i <= 'z'; $i++) {
    echo $i . "\n";
}

// Looping through letters helps specially when you want to work with excel
for ($i = 'R'; $i != 'AD'; $i++):
    echo $i . "\n";
endfor;