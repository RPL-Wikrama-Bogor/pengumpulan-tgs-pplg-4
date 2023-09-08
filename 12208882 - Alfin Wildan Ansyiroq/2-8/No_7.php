<?php

$juara = 0;

for ($i=1; $i<=15 ; $i++) {
    echo "Siswa ke . $i \n";
    $mtk = (int) readline("Matematika: ");
    $indo = (int) readline("Indonesia: ");
    $ingg = (int) readline("Inggris: ");
    $dpk = (int) readline("DPK: ");
    $pai = (int) readline("PAI: ");
    $kehadiran = (int) readline("Kehadiran: ");

    if ($kehadiran != 100) {
        echo "KEHADIRAN TIDAK MENCAPAI 100 = TIDAK JUARA \n";
        continue;
    }
    
    $rata_rata = ($mtk + $indo + $ingg + $dpk + $pai) / 5;
    
    if ($rata_rata <= 95) {
        echo "RATA-RATA TIDAK MENCAPAI 95 ATAU LEBIH = TIDAK JUARA \n";
        continue;
    }

    if ($rata_rata > $juara) {
        $juara = $rata_rata;
        $rata_rata = $i;

    }
}

if ($siswa_juara != 0) {
    echo "Juara kelas : siswa ke $siswa_juara dengan rata-rata $juara \n";

}else {
    echo "Tidak ada siswa yang memenuhi kriteria juara \n";
}


?>