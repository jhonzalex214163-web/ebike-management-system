<?php

// Valores
$cantidad1 = 15;
$cantidad2 = 8;
$cantidad3 = 5;

$precio1 = 800;
$precio2 = 1200;
$precio3 = 2000;

// Cálculos
$ingreso1 = $cantidad1 * $precio1;
$ingreso2 = $cantidad2 * $precio2;
$ingreso3 = $cantidad3 * $precio3;

$total = $ingreso1 + $ingreso2 + $ingreso3;

// Salida
echo "=== INGRESOS DEL DIA ===\n";
echo "Ingresos ($800): $" . $ingreso1 . "\n";
echo "Ingresos ($1200): $" . $ingreso2 . "\n";
echo "Ingresos ($2000): $" . $ingreso3 . "\n";
echo "TOTAL: $" . $total . "\n";