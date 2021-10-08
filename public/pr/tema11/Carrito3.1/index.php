<!DOCTYPE html>
<html>
<head>
	<link href="./estilo.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<title>Carrito de la compra</title>
</head>
<body>
<?php
include "iEnCarrito.php";
include "Producto.php";
include "Descuento.php";
include "Pack.php";
include "Carrito.php";

$p1 = new Producto("Espuma de afeitar", 3.5);
$p2 = new Producto("Cereales de bolitas de chocolate", 5.99);
$p3 = new Producto("Servilletas 20x20", 1.2);

$carrito = new Carrito();
$carrito->meter($p1);
$carrito->meter($p2);
$carrito->meter($p3);
$carrito->quitar(1);

$carrito->masUnidad(0);
$carrito->masUnidad(0);

$carrito->menosUnidad(0);
$carrito->menosUnidad(2);
$carrito->menosUnidad(2);

$d1 = new Descuento('Código XDFG122334', 2);

$carrito->meter($d1);

$p5 = new Producto('Cámara Canon x2', 96);
$p6 = new Producto('Tarjeta de Memoria 8gB', 12);
$p7 = new Producto('Mini tripode', 5);
$pack1 = new Pack(array($p5, $p6, $p7));

$carrito->meter($pack1);

$carrito->mostrar();

?>
</body>
</html>