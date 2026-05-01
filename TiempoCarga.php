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

// Entrada de datos
$cargaInicial = leerNumero("Ingrese carga inicial (%): ");
$cargaFinal = leerNumero("Ingrese carga final (%): ");
$velocidadCarga = leerNumero("Ingrese velocidad de carga (% por hora): ");

// Validación lógica
if ($cargaFinal <= $cargaInicial) {
    echo "Error: la carga final debe ser mayor que la inicial\n";
    exit;
}

// Cálculos
$cargaNecesaria = $cargaFinal - $cargaInicial;
$horas = $cargaNecesaria / $velocidadCarga;

// Salida
echo "\n=== RESULTADO ===\n";
echo "Carga necesaria: $cargaNecesaria%\n";
echo "Tiempo estimado: " . round($horas, 2) . " horas\n";