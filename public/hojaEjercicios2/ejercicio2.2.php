<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.2</h1>
<h3 class="secundaryBox">Sea un sistema de ecuaciones de la forma:

    ax+by=c

    dx+ey=f

    que puede resolverse usando las siguientes fórmulas

    x=(ce-bf)/(ae-bd)      ---       y=(af-cd)/(ae-bd)

    Escribir un programa que dados los coeficientes resuelva el sistema. El programa deberá indicar los casos en los que el sistema de ecuaciones no tenga solución.</h3>

<div>
    <form class="form" action="ejercicio2.2.php" method="post">
        <input class="formInput" type="text" name="numeroIntroducido1" placeholder="Introduce un número"><br>
        <input class="formInput" type="text" name="numeroIntroducido2" placeholder="Introduce un número"><br>
        <input class="formInput" type="text" name="numeroIntroducido3" placeholder="Introduce un número"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$numeroIntroducido1 = $_POST["numeroIntroducido1"];
$numeroIntroducido2 = $_POST["numeroIntroducido2"];
$numeroIntroducido3 = $_POST["numeroIntroducido3"];

if($numeroIntroducido1 >= 0){
    $suma = $numeroIntroducido1 + $numeroIntroducido2 + $numeroIntroducido3;
    echo '<div class="centrado">Suma: ' . $suma . '</div>';
} else{
    $producto = $numeroIntroducido1 * $numeroIntroducido2 * $numeroIntroducido3;
    echo '<div class="centrado">Producto: ' . $producto . '</div>';
}

?>