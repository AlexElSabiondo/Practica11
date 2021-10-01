 <!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css"
	href="../styles.css">

</head>
<body style="background-color:#fffee9;">

	<h1 class="mainBox">Ejercicio 1.2</h1>
	<h3 class="secundaryBox">Dada una temperatura en grados Celsius, convertirla a Fahrenheit, mostrando por pantalla un mensaje del tipo "xxx.xx grados Celsius son yyy.yy grados Fahrenheit”</h3>

	<div>
		<form class="form" action="" method="post">
		<input class="formInput" type="text" name="gradosCelsius" placeholder="Introduce el número de grados Celsius"><br>
		<input class="formButton" type="submit" value="Convertir">
	</form>
	</div>


</body>
</html>

<?php
$valor1 = $_POST["gradosCelsius"];
$valor2 = ($valor1 * 9 / 5) + 32;
  echo '<div class="centrado">'. $valor1 . ' grados Celsius son  ' . $valor2 . ' grados Fahrenheit</div>';

?>

 
 
