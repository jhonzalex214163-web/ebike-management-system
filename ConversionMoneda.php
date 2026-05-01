<?php

function leerNumero($mensaje) {
    while (true) {
        echo $mensaje;
        $valor = trim(fgets(STDIN));

        if (is_numeric($valor)) {
            return floatval($valor);
        }

        echo "Error: ingrese un numero valido\n";
    }
}

// Leer 5 valores de batería
$baterias = [];

for ($i = 1; $i <= 5; $i++) {
    $baterias[] = leerNumero("Ingrese bateria $i (%): ");
}

// Calcular promedio
$promedio = array_sum($baterias) / count($baterias);

// Mostrar resultado
echo "\n=== RESULTADO ===\n";
echo "Promedio de bateria: " . round($promedio, 2) . "%\n";