<?php

function printArr($arr){
    foreach ($arr as &$num){
        echo "<p>$num</p>";
    }
}

function largest($arr){
    $larg = 0;
    foreach ($arr as &$num){
        if($larg < $num){
            $larg = $num;
        }
    }
    echo "<br><p>$larg</p>";
}

function removeDups($arr){
    $sorted = array_unique($arr);
    $string = implode(",", $sorted);
    echo "<br><p>[$string]</p>";
}