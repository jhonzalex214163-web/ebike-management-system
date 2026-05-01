<?php

function leerTexto($mensaje) {
    echo $mensaje;
    return trim(fgets(STDIN));
}

// Entrada de datos
$nombre = leerTexto("Ingrese nombre completo: ");
$email = leerTexto("Ingrese email: ");
$telefono = leerTexto("Ingrese telefono: ");
$documento = leerTexto("Ingrese numero de documento: ");

// Salida
echo "\n=== USUARIO REGISTRADO ===\n";
echo "Nombre: $nombre\n";
echo "Email: $email\n";
echo "Telefono: $telefono\n";
echo "Documento: $documento\n";