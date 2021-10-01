<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Ejemplo 1 tema 6</title>
</head>
<body>
<h1>Formularios usables</h1>

<?php

$errores = [];
include "./funciones.php";

if(! $_POST) {

    include "formulario.php";

} else{

    // Procesar los datos del formulario
    if(!isset($_POST['nombre'])){

        $errores['nombre'] = 'No he recibido el nombre';

    }else if(strlen($_POST['nombre']) < 3) {

        $errores['nombre'] = 'Campo nombre demasiado corto';

    }

    if(!$_POST['email']){

        $errores['email'] = 'No he recibido el email';

    }else if(strlen($_POST['email']) < 6) {

        $errores['email'] = 'El email no es válido';

    }

    if(!isset($_POST['clave1']) || !isset($_POST['clave2'])){

        $errores['clave1'] = 'No he recibido ambas claves';

    } else{

        if(strlen($_POST['clave1']) < 5){

            $errores['clave1'] = 'La clave debe tener al menos 6 caracteres';

        }

        if($_POST['clave1'] != $_POST['clave2']){

            $errores['clave2'] = 'Las claves no son iguales';

        }

    }

    if($errores){

        mostrarErrores($errores);
        include "formulario.php";

    }

    else{

        echo 'Todo bien, pasamos a registrar al usuario en la BD';

    }

}

?>
</body>
</html>