<?php

 $nama = array();
 $max = 0;
 $nilaitinggi = 0;
 $i=0;

 while($i<=10){
    echo "Masukkan nilai \n";
    $nilai = readline();
    $nama[$i] = $nilai;
    if($nama[$i]>$max){
        $max = $nama[$i];
        $nilaitinggi = 1;
    }elseif($nama[$i]==$max){
        $nilaitinggi++;
    }
    $i++;
 }

 echo "Nilai tertinggi adalah = $nilaitinggi \n";
 echo "Nama yang memiliki nilai tertinggi = $max";


?>