<?php
// Definir variables
$minutos = 45;
$horas = 0;
$costo = 0;

// Calcular horas (tarifa por hora o fracción)
$horas = $minutos / 60;

if ($horas < 1) {
    $horas = 1;
}

// Calcular costo
$costo = $horas * 800;

// Mostrar resultado
echo "Costo total: $" . $costo . "\n";
?>