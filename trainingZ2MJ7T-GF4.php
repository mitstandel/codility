<?php

error_reporting(E_ALL);

function solution($A) {

    $N = sizeof($A);

    if($N%2 == 0) return 0;

    $count = array_count_values($A);

    foreach($count as $V => $C) {
        if($C%2 == 0) continue;
        return $V;
    }

    return 0;
}

$A = [9, 3, 9, 3, 9, 7, 9];

$newA = solution($A);

print_r($newA);