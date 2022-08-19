<?php

function solution($X, $A) {
    $steps = range(1, $X);

    $pos = array_search($X, $A);

    if($pos === false) return -1;

    $firstA = array_chunk($A, $pos+1);

    $diff = array_diff($steps, $firstA[0]);

    if(sizeof($diff) > 0) {

        foreach($diff as $value) {
            $newPos = array_search($value, $firstA[1]);

            $pos += ($newPos+1);
        }
    }

    return ($pos+1);
}

$A = array(2,2,2,2,2);

$X = 2;

$answer = solution($X, $A);

print_r($answer);