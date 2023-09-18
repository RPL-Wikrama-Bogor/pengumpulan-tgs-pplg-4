<?php 
echo "Input suhu (fahrenheit): ";
$shf = readline();

$shc = $shf / 33.8;

if ($shc > 300) {
    echo "Panas";
} else if ($shc > 250) {
    echo "Dingin";
} else { 
    echo "Normal";
}
