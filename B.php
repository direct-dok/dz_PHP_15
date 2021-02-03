<?php

$a = 1;
$b = 2;
$c = 3;

if ($a > $b && $a > $c) {
    echo $a;
} elseif ($b > $a && $b > $c) {
    echo $b;
} elseif ($c > $a && $c > $b) {
    echo $c;
};
