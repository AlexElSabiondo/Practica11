<?php

include 'Etiqueta.php';
include 'Enlace.php';
include 'MigasPan.php';
include 'MigasPanContenedor.php';

$migas = new MigasPanContenedor('-', 'section');
$migas->agregarNodo('Home', 'https://www.iescierva.net');
$migas->agregarNodo('Noticias', 'https://www.iescierva.net/noticias');
$migas->agregarNodo('Noticias Académicas', 'https://www.iescierva.net/noticias/academicas');

echo $migas->mostrar();
?>
