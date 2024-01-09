<?php 
echo "Masukan nilai PABP: ";
$pabp = readline();
echo "Masukan nilai MTK: ";
$mtk = readline();
echo "Masukan nilai DPK: ";
$dpk = readline();

$r = ($mtk + $dpk + $pabp) / 3;

if ($r >= 80 && $r <= 100) {
    echo "Nilai A";
} elseif ($r >= 75 && $r < 80) {
    echo "Nilai B";
} elseif ($r >= 65 && $r < 75) {
    echo "Nilai C";
} elseif ($r >= 45 && $r < 65) {
    echo "Nilai D";
} elseif ($r > 0 && $r < 45){
    echo "Nilai E";
} else {
    echo "Nilai K";
}