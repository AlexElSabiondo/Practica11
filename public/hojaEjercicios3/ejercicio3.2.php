<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.2</h1>
<h3 class="secundaryBox">Escribir una función (y el programa que la use) que tome un valor entero y devuelva el número con sus dígitos en reversa. Por ejemplo, dado el número 7631 la función deberá devolver el 1367</h3>

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

$numeroInvertido = invertirNumero($numeroIntroducido);

echo '<div class="centrado">Invertido: ' . $numeroInvertido . '</div>';

function invertirNumero($numero){

    $longitudNumeroIntroducido = strlen($numero);
    $caracter = $longitudNumeroIntroducido - 1;
    $numeroInvertido = "";

    for($i = 0; $i < $longitudNumeroIntroducido; $i++){
        $caracterInvertido = substr($numero, $caracter, 1);
        $numeroInvertido .= $caracterInvertido;
        $caracter--;
    }

    return $numeroInvertido;
}


?>
