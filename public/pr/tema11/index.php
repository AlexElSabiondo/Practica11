<?php

include 'Enlace.php';
include 'MigasPan.php';

$migas = new MigasPan();
$migas->agregarNodo('Home', 'https://www.iescierva.net');
$migas->agregarNodo('Noticias', 'https://www.iescierva.net/noticias');
$migas->agregarNodo('Noticias Académicas', 'https://www.iescierva.net/noticias/academicas');

echo $migas->mostrar();
?>
