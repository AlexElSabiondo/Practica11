<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.5</h1>
<h3 class="secundaryBox">La fecha de cualquier Domingo de Pascua se calcula de la siguiente forma:

    Sea X el año para el que quiere calcularse la fecha.
    Sea A el resto de la división de X entre 19
    Sea B el resto de la división de X entre 4
    Sea C el resto de la división de X entre 7
    Sea D el resto de la división de (19*A+24) entre 30
    Sea E el resto de la división de (2B+4C+6D+5) entre 7

    La fecha para el Domingo de Pascua es el día (22+D+E) de Marzo (tener en cuenta que puede ser de Abril).

    Escribir un programa que dado un año obtenga por pantalla la fecha del Domingo de Pascua de ese año.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="añoIntroducido" placeholder="Introduce un año"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$añoIntroducido = $_POST["añoIntroducido"];

$valorA = $añoIntroducido % 19;
$valorB = $añoIntroducido % 4;
$valorC = $añoIntroducido % 7;
$valorD = (19 * $valorA + 24) % 30;
$valorE = (2 * $valorB + 4 * $valorC + 6 * $valorD + 5) % 7;

$domingoPascuaMarzo = 22 + $valorD + $valorE;
$domingoPascuaAbril = $valorD + $valorE - 9;

if($domingoPascuaMarzo <= 31 && $domingoPascuaMarzo > 0){
    echo '<div class="centrado">Domingo de Pascua en ' . $añoIntroducido . ': ' . $domingoPascuaMarzo . ' de Marzo</div>';
}

if($domingoPascuaAbril <= 30 && $domingoPascuaAbril > 0){
    echo '<div class="centrado">Domingo de Pascua en ' . $añoIntroducido . ': ' . $domingoPascuaAbril . ' de Abril</div>';
}

?>