<?php

function leerNumero($mensaje) {
    while (true) {
        echo $mensaje;
        $valor = trim(fgets(STDIN));

        if (is_numeric($valor) && $valor > 0) {
            return floatval($valor);
        }

        echo "Error: ingrese un numero valido\n";
    }
}

$distancia = leerNumero("Ingrese distancia (km): ");
$consumo = leerNumero("Ingrese consumo (kWh): ");

$eficiencia = $distancia / $consumo;

echo "\n=== RESULTADO ===\n";
echo "Eficiencia: " . round($eficiencia, 2) . " km/kWh\n";