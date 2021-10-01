<?php ini_set('display_errors', 1)?>

<h1>Esta es mi primera página web</h1>

<?php

$sovariable = "Heriberto Martínez";
echo $sovariable;

?>

<h4>Soy otra etiqueta</h4>

<?php

$yo = '';

if($yo == 'Pepe'){
    echo 'Yo soy pepe';
}else{
    echo 'Yo no soy Pepe';
}
?>

<?php $yo='Pepe'; ?>

<?php if($yo == 'Pepe'){ ?>

    <p>Yo soy Pepe</p>

<?php }else{ ?>

    <p>Yo no soy Pepe</p>

<?php } ?>

<?php  $yo = 10; echo $yo?>

<?php
echo "<br>";
$nombre = 'Pepe';
echo 'Hola ' . $nombre . '<br>';
echo "Hola $nombre<br>";

?>

<?php

$variable1 = '1';
$variable2 = 1;

if($variable1 === $variable2){
    echo 'Son iguales<br>';
}

echo ($variable1 === $variable2 ?  'Son iguales' :  'No son iguales');

?>
