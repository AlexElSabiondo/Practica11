<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.4</h1>
<h3 class="secundaryBox">Escribir un programa que diga si un año es bisiesto.</h3>

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

if($añoIntroducido % 4 == 0 && $añoIntroducido % 100 != 0 || $añoIntroducido % 400 == 0){
    echo '<div class="centrado">El año ' . $añoIntroducido .' es bisiesto</div>';

} else {
    echo '<div class="centrado">El año ' . $añoIntroducido .' no es bisiesto</div>';
}

?>