<!DOCTYPE html>
<html>
<head>
    <link href="./estilo.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Carrito de la compra</title>
</head>
<body>

<?php

include "./iEnCarrito.php";
include "./Producto.php";
include "./Descuento.php";
include "./Pack.php";
include "./Carrito.php";
include "./Sesion.php";
include "./Usuario.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombreUsuario = $_POST['nombre'];
    $claveUsuario = $_POST['clave'];

    $producto1 = new Producto("Espuma de afeitar", 3.5);
    $producto2 = new Producto("Cereales de bolitas de chocolate", 5.99);
    $producto3 = new Producto("Servilletas 20x20", 1.2);
    $carrito = new Carrito();
    $carrito->incluirElemento($producto1);
    $carrito->incluirElemento($producto2);
    $carrito->incluirElemento($producto3);

    $usuario = new Usuario($nombreUsuario, $claveUsuario);
    $usuariosRegistrados = $usuario->obtener_usuarios();
    $registrado = $usuario->comprobar_registro($usuariosRegistrados);

    if($registrado){

        $sesion = new Sesion($carrito, $registrado);
        $sesion->mostrar($registrado);

    }

} else {

    include 'formularioInicioSesion.php';

}



?>

</body>
</html>
