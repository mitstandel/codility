<?php

function solution($N) {

    $newN = (int) floor($N/5);

    $binary = array();
    for($i=$newN;$i>=0;$i--) {
        $bin = decbin($i);
        $sub = $N-$i;
        $subBin = decbin($sub);

        if(strstr($bin, "11")) $b = 0;
        elseif(strstr($subBin, "11")) $b = 0; 
        else return $i;
    }

    return -1;
}

function solution2($N) {

    while($N >= 0) {

        $bin = decbin($N);

        $newBin = str_replace("11", "10", $bin);

        $val = bindec($newBin);

        $sub = $N-$val;

        $subBin = decbin($sub);

        if(!strstr($subBin, "11")) return $val;

        $N--;
    }

    return -1;
}

echo "\n".solution2(1000000000);