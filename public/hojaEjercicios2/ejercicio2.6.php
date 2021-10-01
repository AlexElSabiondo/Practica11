<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.6</h1>
<h3 class="secundaryBox">Escribir un programa que escriba los números del 1 al 100 en líneas de 10 números. Después del 100 el programa debe escribir "Fin de Programa" en una línea nueva.</h3>

</body>
</html>

<?php

$j = 1;
$contador = 1;
$tope = 10 * $contador;

do{

    for($i = $j; $i <= $tope; $i++){

        $grupo10 .= $i . ' ';
        if($i==$tope){
            echo '<div class="centrado">' . $grupo10 . ' </div>';
            $grupo10 = "";
        }

    }

    $j += 10;
    $contador++;
    $tope = 10 * $contador;

}while($tope <= 100);

echo '<div class="centrado">Fin de Programa</div>';

?>