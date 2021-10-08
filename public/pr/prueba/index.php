<?php

include 'Citas.php';

$citas = new Citas();
$fechaCita1 = $citas->obtenerInformacion(0, 'Email:','Telefono:');
var_dump($fechaCita1);

?>