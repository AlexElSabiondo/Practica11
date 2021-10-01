<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 1.7</h1>
<h3 class="secundaryBox">Crear un programa que pida un número real y muestre la tabla de multiplicar correspondiente a dicho número perfectamente formateada y con una precisión de dos dígitos.</h3>

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

echo '<div class="centrado"><h2>Tabla del ' . $numeroIntroducido . '</h2></div>';

for($i = 1; $i <= 10; $i++){
    $multiplicacion = round($numeroIntroducido * $i, 2);
    echo '<div class="centrado"><h3>' . $numeroIntroducido . ' x ' . $i . ' = ' . $multiplicacion . '</h3></div>';

}

?>