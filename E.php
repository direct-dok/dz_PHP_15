<?php


$start = 0;
$end = 100;

for (; $start <= $end; $start++) {
    if (!($start % 2)) {
        echo $start . " ";
    }
}
