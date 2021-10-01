<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.4</h1>
<h3 class="secundaryBox">Escribir un programa que calcule el número combinatorio M/N que era M!/(N!*(M-N)!). Para ello hará uso de la función factorial.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="valorM" placeholder="Introduce el valor de M"><br>
        <input class="formInput" type="text" name="valorN" placeholder="Introduce el valor de N"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$valorM = $_POST["valorM"];
$valorN = $_POST["valorN"];

if($valorM >= $valorN && $valorN > 0 && $valorM > 0){
    $valorMFactorial = calcularFactorial($valorM);
    $valorNFactorial = calcularFactorial($valorN);
    $valorMNFactorial = calcularFactorial($valorM-$valorN);

    $numeroCombinatorio = $valorMFactorial / ($valorNFactorial * $valorMNFactorial);
    echo '<div class="centrado">Número combinatorio de M: ' . $valorM . ' y N: ' . $valorN . ' = ' . $numeroCombinatorio . '</div>';
} else{
    echo '<div class="centrado">M debe ser mayor que N y ambos deben ser mayores que 0</div>';
}

function calcularFactorial($numero){

    $resultado = 1;

    for($i = $numero; $i > 0; $i--){
        $resultado *= $i;
    }

    return $resultado;
}

?>