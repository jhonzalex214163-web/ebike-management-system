<?php
echo "Ingrese minutos totales: ";
$minutosTotales = intval(trim(fgets(STDIN)));

$horas = intdiv($minutosTotales, 60);
$minutos = $minutosTotales % 60;

echo "Tiempo: " . $horas . " h " . $minutos . " min\n";
?>