<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.5</h1>
<h3 class="secundaryBox">Escribir un programa que calcule la descomposición en factores primos de un número introducido por teclado. Se deberá utilizar una función que devuelva si un número es primo o no.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="numeroIntroducido" placeholder="Introduce un número"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$numeroIntroducido = $_POST["numeroIntroducido"];

$arrayPrimos = obtenerNumerosPrimos($numeroIntroducido);
$multiplos = obtenerMultiplos($arrayPrimos, $numeroIntroducido);

echo '<div class="centrado">Descomposición factorial de ' . $numeroIntroducido .'</div>';
echo '<div class="centrado">' . $multiplos . '</div>';

function obtenerNumerosPrimos($limitador){

    $primo = true;
    $numPrimos = "";
    $contadorArray = 1;
    $arrayPrimos = array(2);

    for($i = 1; $i <= $limitador; $i++){

        if($i == 2){
            $numPrimos .= $i;
        }

        for($j = 2; $j < $i; $j++){

            if($i % $j == 0){
                $primo = false;
                $j = $i + 1;
            } else{
                $primo = true;
            }

            if($j == $i - 1 && $primo == true){
                $arrayPrimos[$contadorArray] = $i;
                $contadorArray++;
            }

        }

    }

    return $arrayPrimos;
}

function obtenerMultiplos($numerosPrimos, $numeroIntroducido){

    $multiplo = "";
    $condicion = true;

    foreach ($numerosPrimos as $numero){

        do{

            $comprobador = $numeroIntroducido % $numero;
            $division = $numeroIntroducido / $numero;

            if($comprobador == 0){

                $multiplo .= $numero . '<br>';
                $numeroIntroducido = $numeroIntroducido - $division;
                $condicion = true;

            } else{

                $condicion = false;

            }

        } while($condicion == true);

    }

    return $multiplo;
}

?>