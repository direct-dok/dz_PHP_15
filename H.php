<?php

function simplicityCheck($num)
{
    if ($num == 1) {
        return;
    }
    $counter = 0;
    for ($i = 1; $i <= $num; $i++) {

        if ($num % $i == 0) {
            $counter++;
        }
    }

    if ($counter == 2) {
        echo 'prime';
    } else {
        echo 'composite';
    }
}

simplicityCheck(4);
