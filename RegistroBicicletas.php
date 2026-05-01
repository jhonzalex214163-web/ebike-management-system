<?php

$codigQR = "";
$modelo = "";
$bateria = "";

//entrada de datos
echo "Ingrese el código QR: ";
$codigQR = trim(fgets(STDIN));

echo "Ingrese modelo: ";
$modelo = trim(fgets(STDIN));

echo "Ingrese nivel de batería (%): ";
$bateria = floatval(trim(fgets(STDIN)));

//validacion
if ($bateria < 0 || $bateria > 100) {
    echo "Nivel de batería inválido.\n";
}else {
     
//salida de datos
    echo "Bicicleta registrada:\n";
    echo "Código QR: " . $codigQR . "\n";
    echo "Modelo: " . $modelo . "\n";
    echo "Nivel de batería: " . $bateria . "%\n";
}

?>