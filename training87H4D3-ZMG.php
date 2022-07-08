<?php

function solution($A) {

    $size = sizeof($A);

    $newArray = range(1, $size);

    $missing = array_diff($newArray, $A);

    if(sizeof($missing) == 0) return max($A)+1;

    $values = array_values($missing);

    return $values[0];
}

$array = array(2, 3);

echo $missing = solution($array);