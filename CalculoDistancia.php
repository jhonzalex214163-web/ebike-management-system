<?php
echo "Ingrese kilometraje inicial: ";
$kmInicial = floatval(trim(fgets(STDIN)));

echo "Ingrese kilometraje final: ";
$kmFinal = floatval(trim(fgets(STDIN)));

if ($kmFinal < $kmInicial) {
    echo "Error: el kilometraje final no puede ser menor al inicial\n";
} else {
    $distancia = $kmFinal - $kmInicial;
    echo "Distancia recorrida: " . $distancia . " km\n";
}
?>