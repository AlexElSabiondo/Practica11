<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.3</h1>
<h3 class="secundaryBox"> Escribir una función que tome el tiempo introducido por el usuario en el formato HH:MM:SS y lo convierta a segundos. El programa utilizará esta función para calcular la diferencia entre dos tiempos dados.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="tiempoIntroducido1" placeholder="Introduce un tiempo (HH:MM:SS)"><br>
        <input class="formInput" type="text" name="tiempoIntroducido2" placeholder="Introduce un tiempo (HH:MM:SS)"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$posibleTiempoIntroducido1 = $_POST["tiempoIntroducido1"];
$posibleTiempoIntroducido2 = $_POST["tiempoIntroducido2"];

$formatoTiempo1 = comprobarFormato($posibleTiempoIntroducido1);
$formatoTiempo2 = comprobarFormato($posibleTiempoIntroducido2);

if($formatoTiempo1 == true){
    $tiempoIntroducido1 = $_POST["tiempoIntroducido1"];
}

if($formatoTiempo2 == true){
    $tiempoIntroducido2 = $_POST["tiempoIntroducido2"];
}

if($formatoTiempo1 == true && $formatoTiempo2 == true){
    echo '<div class="centrado">Tiempo 1: ' . $tiempoIntroducido1 . '</div>';
    echo '<div class="centrado">Tiempo 2: ' . $tiempoIntroducido2 . '</div>';

    $horas1 = separarHoras($tiempoIntroducido1);
    $minutos1 = separarMinutos($tiempoIntroducido1);
    $segundos1 = separarSegundos($tiempoIntroducido1);
    $horasConvertidas1 = convertirHorasASegundos($horas1);
    $minutosConvertidos1 = convertirMinutosASegundos($minutos1);
    $segundosComprobados1 = comprobarSegundos($segundos1);
    $segundosTotales1 = $horasConvertidas1 + $minutosConvertidos1 + $segundosComprobados1;

    $horas2 = separarHoras($tiempoIntroducido2);
    $minutos2 = separarMinutos($tiempoIntroducido2);
    $segundos2 = separarSegundos($tiempoIntroducido2);
    $horasConvertidas2 = convertirHorasASegundos($horas2);
    $minutosConvertidos2 = convertirMinutosASegundos($minutos2);
    $segundosComprobados2 = comprobarSegundos($segundos2);
    $segundosTotales2 = $horasConvertidas2 + $minutosConvertidos2 + $segundosComprobados2;

    $diferenciaTiempos = $segundosTotales1 - $segundosTotales2;

    $horasDiferencia = floor($diferenciaTiempos/ 3600);
    $minutosDiferencia = floor(($diferenciaTiempos - ($horasDiferencia * 3600)) / 60);
    $segundosDiferencia = $diferenciaTiempos - ($horasDiferencia * 3600) - ($minutosDiferencia * 60);
    echo '<div class="centrado">Diferencia: ' . $horasDiferencia . ':' . $minutosDiferencia . ":" . $segundosDiferencia . '</div>';
} else {
    echo '<div class="centrado">Comprueba que el formato de tiempo es correcto</div>';
}




function obtenerPuntosSeparacion($tiempo){

    for($i = 0; $i < strlen($tiempo); $i++){

        $caracterTiempo = substr($tiempo, $i, 1);

        if($caracterTiempo == ':'){

            $separacion = $i;
            $tiempo = substr($tiempo, $i+1);
            $i = strlen($tiempo);

        }

    }

    return $separacion;
}

function separarHoras($tiempo){
    $tiempoIntroducidoModificado = $tiempo;
    $separacion = obtenerPuntosSeparacion($tiempoIntroducidoModificado);
    $horas = substr($tiempoIntroducidoModificado, 0, $separacion);
    return $horas;
}

function separarMinutos($tiempo){
    $separacion = obtenerPuntosSeparacion($tiempo);
    $tiempoIntroducidoModificado = substr($tiempo, $separacion+1);
    $separacion = obtenerPuntosSeparacion($tiempoIntroducidoModificado);
    $minutos = substr($tiempoIntroducidoModificado, 0, $separacion);
    return $minutos;
}

function separarSegundos($tiempo){
    $separacion = obtenerPuntosSeparacion($tiempo);
    $tiempoIntroducidoModificado = substr($tiempo, $separacion+1);
    $separacion = obtenerPuntosSeparacion($tiempoIntroducidoModificado);
    $tiempoIntroducidoModificado = substr($tiempoIntroducidoModificado, $separacion+1);
    $segundos = $tiempoIntroducidoModificado;
    return $segundos;
}

function convertirHorasASegundos($horas){
    $horasConvertidas = $horas;

    if($horasConvertidas == ""){
        $horasConvertidas = 0;
    } else {
        $horasConvertidas = $horas * 3600;
    }

    return $horasConvertidas;
}

function convertirMinutosASegundos($minutos){
    $minutosConvertidas = $minutos;

    if($minutosConvertidas == ""){
        $minutosConvertidas = 0;
    } else {
        $minutosConvertidas = $minutos * 60;
    }

    return $minutosConvertidas;
}

function comprobarSegundos($segundos){

    if($segundos == ""){
        $segundosComprobados = 0;
    } else{
        $segundosComprobados = $segundos;
    }

    return $segundosComprobados;
}

function comprobarFormato($tiempo){

    $numeroSeparaciones = 0;

    for($i = 0; $i < strlen($tiempo); $i++){

        $caracterTiempo = substr($tiempo, $i, 1);

        if($caracterTiempo == ':'){

            $numeroSeparaciones++;

        }

    }

    if($numeroSeparaciones == 2){
        $formatoTiempo = true;
    } else{
        $formatoTiempo = false;
    }

    return $formatoTiempo;
}

?>
