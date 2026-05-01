<?php
echo "Ingrese minutos de uso: ";
$minutos = intval(trim(fgets(STDIN)));

$horas = ceil($minutos / 60);
$costo = $horas * 800;

echo "Costo total: $" . $costo . "\n";
?>
