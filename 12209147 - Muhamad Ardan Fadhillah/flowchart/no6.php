<?php
    $siswa = array();
    $i = 0;
    $max = 0;
    $total_tertinggi = 0;

    while(i < 10){
        echo "masukkan nilai";
        $nilai = readline();
        $siswa[$i] = $nilai;

    if($siswa[$i] > $nilai){
        $max = $siswa[i];
        $total_tertinggi = 1;
    } else if ($siswa[$i] == $max){
        $total_tertinggi++;
    } 


}

echo "Nilai Tertinggi = " . $max . "\n";
echo "Siswa yang mempunyai nilai tertinggi" . $total_tertinggi;

?>