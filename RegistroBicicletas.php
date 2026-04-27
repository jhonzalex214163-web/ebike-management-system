<?php

$codigoQR = readline("Ingrese el código QR: ");
$modelo = readline("Ingrese modelo de la bicicleta: ");
$bateria = readline("Ingrese el nivel de bateria (%): ");

echo "\nBicicleta registrada:\n";
echo "Codigo: " . $codigoQR . "\n";
echo "Modelo: " . $modelo . "\n";
echo "Bateria: " . $bateria . "%\n";    

?>