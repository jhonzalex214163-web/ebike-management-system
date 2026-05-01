<?php
$b1 = floatval(trim(fgets(STDIN)));
$b2 = floatval(trim(fgets(STDIN)));
$b3 = floatval(trim(fgets(STDIN)));
$b4 = floatval(trim(fgets(STDIN)));
$b5 = floatval(trim(fgets(STDIN)));

$promedio = ($b1 + $b2 + $b3 + $b4 + $b5) / 5;

echo "Promedio de bateria: " . $promedio . "%\n";
?>