<?php

error_reporting(E_ALL);

function solution($X, $Y, $D) {

    if ($X < 0 || $Y < 0 || $D < 0) return 0;

    if ($X > $Y) return 0;

    $R = $Y-$X;

    if ($R%$D == 0) {
        $I = ($R/$D);
        return $I;
    } else {
        $I = floor(($Y-$X)/$D)+1;

        return (int) $I;
    }
}

$newA = solution(1, 5, 2);

print_r($newA);