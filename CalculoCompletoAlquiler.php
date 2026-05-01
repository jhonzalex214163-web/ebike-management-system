<?php

$tarifaBase = 800;
$seguro = 200;
$impuesto = $tarifaBase * 0.19;
$deposito = 50000;

// Total a pagar (incluyendo depósito)
$total = $tarifaBase + $seguro + $impuesto + $deposito;

// Total real sin depósito (opcional informativo)
$totalSinDeposito = $tarifaBase + $seguro + $impuesto;

// Salida
echo "=== COSTO DE ALQUILER ===\n";
echo "Tarifa base: $" . $tarifaBase . "\n";
echo "Seguro: $" . $seguro . "\n";
echo "Impuesto (19%): $" . round($impuesto, 2) . "\n";
echo "Deposito (reembolsable): $" . $deposito . "\n";
echo "------------------------\n";
echo "Total a pagar: $" . round($total, 2) . "\n";
echo "Total sin deposito: $" . round($totalSinDeposito, 2) . "\n";
echo "\nNota: El deposito se devuelve al finalizar.\n";