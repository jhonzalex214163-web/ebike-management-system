<?php

echo "Ingrese minutos totales: ";
$mnutostotales = intval(trim(fgets(STDIN)));

$horas = intdiv($mnutostotales, 60);
$minutos = $mnutostotales % 60;

echo "Tiempo: " . $horas . " h " . $minutos . " min\n";

?> 