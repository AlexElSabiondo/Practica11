<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 1.10</h1>
<h3 class="secundaryBox">Calcular la edad de una persona introduciendo la fecha actual y su fecha de nacimiento.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="fechaActual" placeholder="Introduce la fecha actual"><br>
        <input class="formInput" type="text" name="fechaNacimiento" placeholder="Introduce la fecha de nacimiento"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$fechaActual = $_POST["fechaActual"];
$fechaNacimiento = $_POST["fechaNacimiento"];

$diferenciaFechas = abs(strtotime($fechaActual) - strtotime($fechaNacimiento));

$años  = floor($diferenciaFechas / (365 * 60 * 60 * 24));
$meses = floor(($diferenciaFechas - $años * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$dias   = floor(($diferenciaFechas - $años * 365 * 60 * 60 * 24 - $meses * 30 * 60 * 60 *24) / (60 * 60 * 24));

echo '<div class="centrado"><h3>' . $años . ' años ' . $meses . ' meses ' . $dias . ' días</h3></div>';





?>