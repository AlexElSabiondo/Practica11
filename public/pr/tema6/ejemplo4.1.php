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
<?php if(! $_POST) {

    include "formulario.php";

} else{

    include "./funciones.php";
    $errores = [];

    // Procesar los datos del formulario
    if(!isset($_POST['nombre'])){

        $errores[] = 'No he recibido el nombre';

    }else if(strlen($_POST['nombre']) < 3) {

        $errores[] = 'Campo nombre demasiado corto';

    }

    if(!$_POST['email']){

        $errores[] = 'No he recibido el email';

    }else if(strlen($_POST['email']) < 6) {

        $errores[] = 'El email no es válido';

    }

    if(!isset($_POST['clave1']) || !isset($_POST['clave2'])){

        $errores[] = 'No he recibido ambas claves';

    } else{

        if(strlen($_POST['clave1']) < 5){

            $errores[] = 'La clave debe tener al menos 6 caracteres';

        }

        if($_POST['clave1'] != $_POST['clave2']){

            $errores[] = 'Las claves no son iguales';

        }

    }

    if($errores){

        mostrarErrores($errores);
        ?>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">

            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?= $_POST['nombre']?>" placeholder="Introduce tu nombre">
            </p>

            <p>
                <label for="email">Email</label>
                <input type="email" name="email" value="<?= $_POST['email']?>">
            </p>

            <p>
                <label for="clave1">Contraseña</label>
                <input type="password" name="clave1"></input>
            </p>

            <p>
                <label for="clave2">Repetir Contraseña</label>
                <input type="password" name="clave2"></input>
            </p>

            <p>
                <label>
                    <input type="submit" value="Enviar">
                </label>
            </p>

        </form>

<?php

    }

    else{

        echo 'Todo bien, pasamos a registrar al usuario en la BD';

    }

}

?>
</body>
</html>