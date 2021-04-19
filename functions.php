<?php

function printArr($arr){
    foreach ($arr as &$num){
        echo "<p>$num</p>";
    }
}