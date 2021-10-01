<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 1.9</h1>
<h3 class="secundaryBox">Escribir un programa que lea el valor de un ángulo en radianes y muestre su valor en grados, minutos y segundos.</h3>

<div>
    <form class="form" action="" method="post">
        <input class="formInput" type="text" name="anguloIntroducido" placeholder="Introduce el ángulo"><br>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php
$anguloIntroducido = $_POST["anguloIntroducido"];

echo "<div class='centrado'><table border='2' cellspacing='10' cellpadding='10' align='center'>";
echo "<thead><tr><th>Grados</th><th>Minutos</th><th>Segundos</th></tr></thead>";
echo "<tr>";
echo '<td>' . round($anguloIntroducido * 180 / 3.1416, 2) . '</td>';
echo '<td>' . round($anguloIntroducido * (60 * 180) / 3.1416, 2) . '</td>';
echo '<td>' . round($anguloIntroducido * (3600 * 180) / 3.1416, 2) . '</td>';
echo "</table></div>";

?>