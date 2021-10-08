<!DOCTYPE html>
<html>
<head>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Carrito de la compra</title>
</head>
<body>
<?php
include "Producto.php";
include "Carrito.php";

$p1 = new Producto("Espuma de afeitar", 3.5);
$p2 = new Producto("Cereales de bolitas de chocolate", 5.99);
$p3 = new Producto("Servilletas 20x20", 1.2);

$carrito = new Carrito();
$carrito->meter($p1);
$carrito->meter($p2);
$carrito->meter($p3);

$carrito->mostrar();

?>
</body>
</html>