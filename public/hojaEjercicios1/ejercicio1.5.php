 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<link rel="stylesheet" type="text/css"
 	href="../styles.css">

 </head>
 <body style="background-color:#fffee9;">

 	<h1 class="mainBox">Ejercicio 1.5</h1>
 	<h3 class="secundaryBox">Escribir un programa que pregunte el año actual y la edad de una persona y calcule la edad de esa persona en el año 2020</h3>

 	<div>
 		<form class="form" action="" method="post">
 			<input class="formInput" type="text" name="añoActual" placeholder="Introduce el año actual"><br>
 			<input class="formInput" type="text" name="edadActual" placeholder="Introduce tu edad"><br>
 			<input class="formButton" type="submit" value="Convertir">
 		</form>
 	</div>


 </body>
 </html>

 <?php

 $añoActual = $_POST["añoActual"];
 $edadActual = $_POST["edadActual"];

 if($añoActual > 2020){

 	echo '<div class="centrado">Debes introducir un año inferior a 2020</div>';


 } else {
 	$edadFutura = (2020 - $añoActual) + $edadActual;
 	echo '<div class="centrado">En 2020 tendrás ' . $edadFutura . ' años</div>';
 }

 ?> 