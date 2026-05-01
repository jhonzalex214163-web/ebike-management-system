<?php
echo "Ingrese bateria 1: ";
$b1 = floatval(trim(fgets(STDIN)));

echo "Ingrese bateria 2: ";
$b2 = floatval(trim(fgets(STDIN)));

echo "Ingrese bateria 3: ";
$b3 = floatval(trim(fgets(STDIN)));

echo "Ingrese bateria 4: ";
$b4 = floatval(trim(fgets(STDIN)));

echo "Ingrese bateria 5: ";
$b5 = floatval(trim(fgets(STDIN)));

$promedio = ($b1 + $b2 + $b3 + $b4 + $b5) / 5;

echo "Promedio de bateria: " . $promedio . "%\n";
?>