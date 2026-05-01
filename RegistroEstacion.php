<?php
echo "Nombre de la estacion: ";
$nombre = trim(fgets(STDIN));

echo "Direccion: ";
$direccion = trim(fgets(STDIN));

echo "Capacidad maxima: ";
$capacidad = intval(trim(fgets(STDIN)));

echo "Coordenadas GPS: ";
$coordenadas = trim(fgets(STDIN));

echo "\nEstacion registrada exitosamente\n";
echo "Nombre: " . $nombre . "\n";
echo "Direccion: " . $direccion . "\n";
echo "Capacidad: " . $capacidad . "\n";
echo "Coordenadas: " . $coordenadas . "\n";
?>