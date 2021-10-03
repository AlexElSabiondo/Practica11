<?php

include 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$errorNombre = validar_nombre($_POST['nombre']);
$errorApellidos = validar_apellidos($_POST['apellidos']);
$errorEmail = validar_email($_POST['email']);
$errorTelefono = validar_telefono($_POST['telefono']);

if($errorNombre|| $errorApellidos|| $errorEmail || $errorTelefono){

    $errores = comprobar_errores($errorNombre, $errorApellidos, $errorEmail, $errorTelefono);

    include './formularioReservas.php';

} else{

    echo 'Todo correcto';

}



} else {

    include './formularioReservas.php';

}

?>