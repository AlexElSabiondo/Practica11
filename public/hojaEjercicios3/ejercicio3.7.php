<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.7</h1>
<h3 class="secundaryBox">Escribir un programa que use una función que indique si un texto pasado como parámetro es un palíndromo o no.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="textoIntroducido" placeholder="Introduce un texto">
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$textoIntroducido = $_POST['textoIntroducido'];

$textoIntroducidoInvertido = invertirTexto($textoIntroducido);

if($textoIntroducido == $textoIntroducidoInvertido){

    echo '<div class="centrado">El texto ' . $textoIntroducido . ' es palíndromo</div>';

} else {

    echo '<div class="centrado">El texto ' . $textoIntroducido . ' no es palíndromo</div>';

}


function invertirTexto($texto){

    $limitador = strlen($texto) - 1;
    $textoIntroducidoInvertido = "";

    for($i = 0; $i < strlen($texto); $i++){

        $textoIntroducidoInvertido .= substr($texto, $limitador, 1);
        $limitador--;

    }

    return $textoIntroducidoInvertido;
}

?>