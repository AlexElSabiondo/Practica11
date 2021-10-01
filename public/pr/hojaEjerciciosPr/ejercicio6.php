<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJercicio 1.6</title>
</head>
<body>
<h3>Resolución de Ejercicio 6 de la hoja 1</h3>

<?php
$cantidad = 2345.67;

$cantidadParcial = $cantidad;

$b500 = (int) ($cantidadParcial / 500);
$cantidadParcial = $cantidadParcial - $b500 * 500;

$b200 = (int) ($cantidadParcial / 200);
$cantidadParcial = $cantidadParcial - $b200 * 200;

$b100 = (int) ($cantidadParcial / 100);
$cantidadParcial = $cantidadParcial - $b100 * 100;

$b50 = (int) ($cantidadParcial / 50);
$cantidadParcial = $cantidadParcial - $b50 * 50;

$b20 = (int) ($cantidadParcial / 20);
$cantidadParcial = $cantidadParcial - $b20 * 20;

$b10 = (int) ($cantidadParcial / 10);
$cantidadParcial = $cantidadParcial - $b10 * 10;

$b5 = (int) ($cantidadParcial / 5);
$cantidadParcial = $cantidadParcial - $b5 * 5;

$m2 = (int) ($cantidadParcial / 2);
$cantidadParcial = $cantidadParcial - $m2 * 2;

$m1 = (int) ($cantidadParcial / 1);
$cantidadParcial = $cantidadParcial - $m1 * 1;

?>

</body>
</html>

