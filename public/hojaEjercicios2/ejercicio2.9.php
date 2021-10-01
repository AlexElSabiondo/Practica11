<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 2.9</h1>
<h3 class="secundaryBox">Programa que calcule los números primos del 1 al 100 y los saque por pantalla.</h3>

</body>
</html>

<?php

$primo = true;
$numPrimos = "";

for($i = 1; $i <= 100; $i++){

    if($i == 2){
        $numPrimos .= $i;
    }

    for($j = 2; $j < $i; $j++){

        if($i % $j == 0){
            $primo = false;
            $j = $i + 1;
        } else{
            $primo = true;
        }

        if($j == $i - 1 && $primo == true){
            $numPrimos .= ', ' . $i;
        }

    }

}

echo '<div class="centrado">' . $numPrimos . ' </div>';

?>