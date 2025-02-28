<?php

$isTrue = true;
while (true):
    echo "Go on forever\n";
    if ($isTrue):
        break;
    endif;
endwhile;

for ($i = 1; $i <= 10; $i++):
    if ($i == 5):
        continue;
    endif;
    echo "$i \n";
endfor;