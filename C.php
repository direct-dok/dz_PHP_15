<?php

$year = 2020;

if ($year % 4 == 0 || $year % 100 != 0 && $year % 400 == 0) {
    echo "YES";
} else {
    echo "NO";
}
