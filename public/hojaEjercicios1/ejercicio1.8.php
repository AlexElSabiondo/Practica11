<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 1.8</h1>
<h3 class="secundaryBox">Mostrar en una tabla el cuadrado y el cubo de los cinco primeros números enteros que siguen a uno previamente introducido. Los datos deben aparecer encolumnados.</h3>

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

echo "<div class='centrado'><table border='2' cellspacing='10' cellpadding='10' align='center'>";
echo "<thead><tr><th>Número</th><th>Número elevado a 2</th><th>Número elevado a 3</th></tr></thead>";

for($i = 1; $i <= 5; $i++){

    $numeroOperador = $numeroIntroducido + $i;
    echo "<tr>";
    echo '<td>' . $numeroOperador . '</td>';
    echo '<td>' . $numeroOperador * $numeroOperador . '</td>';
    echo '<td>' . $numeroOperador * $numeroOperador * $numeroOperador . '</td></tr>';

}

echo "</table></div>";

?>