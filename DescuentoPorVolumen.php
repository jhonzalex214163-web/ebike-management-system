<?php

function leerNumero($mensaje) {
    while (true) {
        echo $mensaje;
        $valor = trim(fgets(STDIN));

        if (is_numeric($valor) && $valor >= 0) {
            return floatval($valor);
        }

        echo "Error: ingrese un numero valido\n";
    }
}

// Entrada de datos
$cantidad = leerNumero("Ingrese cantidad de bicicletas: ");
$precioUnitario = leerNumero("Ingrese precio por bicicleta: ");

// Cálculos
$subtotal = $cantidad * $precioUnitario;

// Aplicar descuento solo si aplica
$descuento = 0;
if ($cantidad > 10) {
    $descuento = $subtotal * 0.15;
}

$total = $subtotal - $descuento;

// Salida
echo "\n=== RESULTADO ===\n";
echo "Subtotal: $" . $subtotal . "\n";
echo "Descuento: $" . $descuento . "\n";
echo "Total a pagar: $" . $total . "\n";