<?php
echo "Ingrese codigo QR: ";
$codigoQR = trim(fgets(STDIN));

echo "Ingrese modelo: ";
$modelo = trim(fgets(STDIN));

echo "Nivel de bateria (%): ";
$bateria = floatval(trim(fgets(STDIN)));

// Validación básica
if ($bateria < 0 || $bateria > 100) {
    echo "Error: nivel de bateria invalido\n";
} else {
    echo "\nBicicleta registrada:\n";
    echo "Codigo: " . $codigoQR . "\n";
    echo "Modelo: " . $modelo . "\n";
    echo "Bateria: " . $bateria . "%\n";
}
?>