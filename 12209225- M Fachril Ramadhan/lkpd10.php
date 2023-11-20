<?php

$pabp = 80;
$mtk = 95;
$dpk = 43;

$nilai_rata2 = ($pabp + $mtk + $dpk) / 3;

$grade = '';

    if ( $nilai_rata2 >=80 ) {
        $grade = 'A';
    }elseif ( $nilai_rata2 >= 75 ) {
        $grade = 'B';
    }elseif ( $nilai_rata2 >= 65 ) {
        $grade = 'C';
    }elseif ( $nilai_rata2 >= 45 ) {
        $grade = 'D';
    }elseif ( $nilai_rata2 >= 0 ) {
        $grade = 'E';
    }else{
        $grade = 'K`';
    }

    echo "Rata-rata nilai : $nilai_rata2<br>";
    echo "Grade : $grade";