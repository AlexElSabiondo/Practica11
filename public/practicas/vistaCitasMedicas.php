<?php

include './funciones.php';


$citasConfirmadas = separar_citas();

$longitudCitas = count($citasConfirmadas);
for($i = 0; $i <= $longitudCitas; $i++){

    if($_POST['cita'. $i]){

        unset($citasConfirmadas[$i]);

    }

}

$citasConfirmadas = array_values($citasConfirmadas);

foreach ($citasConfirmadas as $cita){

    $informacion .= $cita . "\n";

}

$archivo = './citas.txt';

file_put_contents($archivo, $informacion);

include './formularioVistaCitasMedicas.php';

?>