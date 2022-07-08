<?php

error_reporting(E_ALL);

function solution($A, $K) {

    $newA = $A;

    if(sizeof($A) == 0) return $newA;

    while($K != 0) {
        $size = sizeof($A);
        $newA = array($A[$size-1]);
        foreach($A as $key => $value) {
            if($key == ($size-1)) continue;
            $newA[] = $value;
        }
        $A = $newA;
        $K--;
    }

    return $newA;
}

$A = [];
$K = 1;

$newA = solution($A, $K);

print_r($newA);