<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.7</h1>
<h3 class="secundaryBox">Programa que calcule el valor de elevar un número real a (base) a un número entero b (exponente).</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="numeroIntroducido" placeholder="Introduce un número"><br>
        <input class="formInput" type="text" name="exponenteIntroducido" placeholder="Introduce un exponente"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$numeroIntroducido = $_POST["numeroIntroducido"];
$exponenteIntroducido = $_POST["exponenteIntroducido"];

$resultado = pow($numeroIntroducido, $exponenteIntroducido);
echo '<div class="centrado">' . $numeroIntroducido . '^' . $exponenteIntroducido . ' = ' . $resultado . '</div>';

?>