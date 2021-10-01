<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.1</h1>
<h3 class="secundaryBox">Realizar un programa que escriba todos los números enteros menores que cierto entero N y que a su vez sean múltiplos de dos números A y B conocidos. Utilizar para ello una función que admita dos parámetros I y J e indique si I es múltiplo de J.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="numeroIntroducido" placeholder="Introduce un número"><br>
        <input class="formInput" type="text" name="numeroIntroducidoMultiplo1" placeholder="Introduce un número del que quieres que sea múltiplo"><br>
        <input class="formInput" type="text" name="numeroIntroducidoMultiplo2" placeholder="Introduce un número del que quieres que sea múltiplo"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$numeroIntroducido = $_POST["numeroIntroducido"];
$numeroIntroducidoMultiplo1 = $_POST["numeroIntroducidoMultiplo1"];
$numeroIntroducidoMultiplo2 = $_POST["numeroIntroducidoMultiplo2"];

function numerosMultiplos($multiplo1, $multiplo2){



}


?>
