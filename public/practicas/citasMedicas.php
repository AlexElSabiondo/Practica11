<?php

include 'funciones.php';

$citasConfirmadas = separar_citas();
$diasCitasConfirmadas = separar_dias($citasConfirmadas);
$diasConHora = horas_disponibles($citasConfirmadas);

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errorNombre = validar_nombre($_POST['nombre']);
    $errorApellidos = validar_apellidos($_POST['apellidos']);
    $errorEmail = validar_email($_POST['email']);
    $errorTelefono = validar_telefono($_POST['telefono']);
    $errorHora = validar_hora($_POST['calendario'], $diasConHora);
    $errores = comprobar_errores($errorNombre, $errorApellidos, $errorEmail, $errorTelefono, $errorHora);

    if (!$errores) {

        añadir_cita();
        separar_citas();


    } else {

        include './formularioReservas.php';

    }

} else {

    include './formularioReservas.php';

}
?>