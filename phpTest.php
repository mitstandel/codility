<?php

function solution($R) {
    // write your code in PHP7.0

    $h = 1; 
    $v = 0; 
    $tiles = 0;
    $cC = $cR = 0;
    $rowX = array();
    $rC = 0;
    $tilesScanned = array();
    for($i=0;$i<sizeof($R);$i++) {

        $rowContent = str_split($R[$i], 1);

        $xPos = strpos($R[$i], 'X');
        $rowX[] = $xPos;
        if($h == 1 && $rC == 0) {
            foreach($rowContent as $j => $tile) {
                if($tile == 'X') break;
                $tilesScanned[] = $i.$j;
            }
            $h = 0;
            $v = 1;
        }

        if($v == 1 && $rC == 0) {
            if($R[$i][$j] == "X") {
                $v = 0;
                $h = 1;
                $cR = $i;
                $rC = 1;
            } else {
                $tilesScanned[] = $i.$j;
            }
        }

        if($h == 1 && $rC == 1) {
            $xPos = strpos($R[$i][$cR], 'X');
            if($cC > $xPos) {
                $tiles += $xPos;
                $h = 0;
                $v = 1;
            }
        }

        if($v == 1 && $rC == 1) {
            
            $tiles++;
        }
    }

    return sizeof($tilesScanned);
}

$A = ['....X..', 'X......', '.....X.', '.......'];

$result = solution($A);

print_r($result);