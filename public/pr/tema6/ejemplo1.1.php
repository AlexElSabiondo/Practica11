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

    // Procesar los datos del formulario
    if(!isset($_POST['nombre'])){

        echo "No he recibido el nombre";

    } else if(strlen($_POST['nombre']) < 3) {

        echo "Campo nombre demasiado corto";

    } else if(!$_POST['email']){

        echo "No he recibido el email";

    } else if(strlen($_POST['email']) < 6) {

        echo "El email no es válido";

    } else if(!isset($_POST['clave1']) || !isset($_POST['clave2'])){

        echo 'No he recibido ambas claves';

    } else if(strlen($_POST['clave1']) < 5){

        echo 'La clave debe tener al menos 6 caracteres';

    } else if($_POST['clave1'] != $_POST['clave2']){

        echo 'Las claves no son iguales';

    } else{

        echo 'Todo bien, pasamos a registrar al usuario en la BD';

    }

}

?>
</body>
</html>