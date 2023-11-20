<?php
//
$mtk = readline("mtk : ");
$dpk = readline("dpk : ");
$pabp = readline("pabp : ");

if (!is_numeric($mtk) && !is_numeric($dpk) && !is_numeric($pabp)) {
    exit("Input harus berupa angka");
}

$rata = ($mtk + $mtk + $pabp) / 3;

if ($rata >= 80 && $rata <= 100) {
    echo "Grade A";
} elseif ($rata >= 75 && $rata <= 80) {
    echo "Grade B";
} elseif ($rata >= 65 && $rata <= 75) {
    echo "Grade C";
} elseif ($rata >= 45 && $rata <= 65) {
    echo "Grade D";
} elseif ($rata >= 0 && $rata <= 45) {
    echo "Grade E";
} else {
    echo "Grade K";
}
?>