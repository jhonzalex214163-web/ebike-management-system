<?php

function leerTexto($mensaje) {
    echo $mensaje;
    return trim(fgets(STDIN));
}

// Prefijo fijo
$prefijo = "IEMS";

// Entrada de datos
$idEstacion = leerTexto("Ingrese ID de estación (3 dígitos): ");
$idBicicleta = leerTexto("Ingrese ID de bicicleta (4 dígitos): ");

// Validación
if (strlen($idEstacion) != 3 || !is_numeric($idEstacion)) {
    echo "Error: el ID de estación debe tener 3 dígitos\n";
    exit;
}

if (strlen($idBicicleta) != 4 || !is_numeric($idBicicleta)) {
    echo "Error: el ID de bicicleta debe tener 4 dígitos\n";
    exit;
}

// Generar código QR
$codigoQR = $prefijo . $idEstacion . $idBicicleta;

// Salida
echo "\n=== RESULTADO ===\n";
echo "Código QR generado: $codigoQR\n";