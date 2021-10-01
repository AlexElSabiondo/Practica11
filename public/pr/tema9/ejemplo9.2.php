<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Citas Médicas</title>
</head>
<body>

<?php

$archivo = "citas.txt";

// Si se envía algo por la cabecera POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Si existe un $_POST de cita
    if(isset($_POST['cita']) && $_POST['cita'] !=  '' && isset($_POST['nombre']) && $_POST['nombre'] != ''){

        // Si el archivo es escribible
        if(is_writable($archivo)){

            $fuente = fopen($archivo, 'a+');
            $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
            fwrite($fuente, $reserva);
            fclose($fuente);
            echo '<h2>Cita guardada correctamente</h2>';

        } else {

            echo '<h2>La cita no se ha podido guardar</h2>';

        }

    } else {

        // Volver a mostrar el formulario con los errores

    }

} else{

    include 'formularioCitas.php';

}

?>

</body>
</html>
