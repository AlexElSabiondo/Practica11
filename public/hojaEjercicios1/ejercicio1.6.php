<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 1.6</h1>
<h3 class="secundaryBox">Escribir un programa que calcule el número de billetes de 500, 200, 100, 50, 20, 10 y 5 así como de monedas de 2, 1, 0'5, 0'20, 0'10, 0'05, 0'02 y 0'01 para desglosar una cantidad C de forma que se necesite la menor cantidad de cada tipo.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="cantidadIntroducida" placeholder="Introduce la cantidad"><br>
        <input class="formButton" type="submit" value="Convertir">
    </form>
</div>


</body>
</html>

<?php

$cantidadIntroducida = $_POST["cantidadIntroducida"];
$arrayDinero = array("500", "200", "100", "50", "20", "10", "5", "2", "1", "0.50", "0.20", "0.10", "0.05", "0.02", "0.01");

echo '<div class="centrado">Desglose de ' . $cantidadIntroducida . '€ en billetes y monedas</div>';

foreach ($arrayDinero as $valorArray) {

    $comprobador = $cantidadIntroducida - $valorArray;


    while ($comprobador >= 0) {
        echo '<div class="centrado">' . $valorArray . '€ </div>';
        $cantidadIntroducida = $comprobador;
        $comprobador = $cantidadIntroducida - $valorArray;

    }
}

?>