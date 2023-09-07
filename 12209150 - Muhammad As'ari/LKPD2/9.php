<?php
//
$fahrenheit = readline("Fahrenheit : ");
$celcius = ($fahrenheit - 32) * 5 / 9;

if ($celcius < 250) {
    echo "dingin";
} elseif ($celcius > 300) {
    echo "panas";
} else {
    echo "normal";
}
?>