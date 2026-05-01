<?php
echo "Ingrese distancia en km: ";
$km = floatval(trim(fgets(STDIN)));

echo "Ingrese consumo por km (kWh): ";
$consumoPorKm = floatval(trim(fgets(STDIN)));

echo "Ingrese costo por kWh: ";
$costoKwh = floatval(trim(fgets(STDIN)));

$kwhTotal = $km * $consumoPorKm;
$costoTotal = $kwhTotal * $costoKwh;

echo "\nConsumo total: " . $kwhTotal . " kWh\n";
echo "Costo total: $" . $costoTotal . "\n";
?>