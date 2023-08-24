<?php
    $a = (int)readline();
    $b = (int)readline();
    $c = (int)readline();

    if($a > $b && $a > $c){
        echo "huruf $a tertinggi"; 
    } else if($b > $a && $b > $c){
        echo "huruf1 $b tertinggi";
    } else {
        echo "huruf3 $c tertinggi";
    }
?>