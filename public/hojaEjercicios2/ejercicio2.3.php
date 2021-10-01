<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.3</h1>
<h3 class="secundaryBox">Escribir un programa que calcule las raíces, bien reales o imaginarias, de una ecuación de segundo grado. El programa también debe ser capaz de operar con valores nulos para el coeficiente de orden 2.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="valorA" placeholder="Introduce el valor de a"><br>
        <input class="formInput" type="text" name="valorB" placeholder="Introduce el valor de b"><br>
        <input class="formInput" type="text" name="valorC" placeholder="Introduce el valor de c"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$valorA = $_POST["valorA"];
$valorB = $_POST["valorB"];
$valorC = $_POST["valorC"];

$raizCuadrada = ($valorB * $valorB) - 4 * $valorA * $valorC;

if($raizCuadrada >= 0){

    $x1 = (-$valorB + sqrt($raizCuadrada)) / (2 * $valorA);
    $x2 = (-$valorB - sqrt($raizCuadrada)) / (2 * $valorA);
    echo '<div class="centrado">X1 = ' . $x1 . '</div>';
    echo '<div class="centrado">X2 = ' . $x2 . '</div>';

} else{
    echo '<div class="centrado">La raíz cuadrada no puede ser un número negativo ' . $raizCuadrada .'</div>';
}

?>