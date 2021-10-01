  <!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css"
	href="../styles.css">

</head>
<body style="background-color:#fffee9;">

	<h1 class="mainBox">Ejercicio 1.3</h1>
	<h3 class="secundaryBox">Dado el radio de una radio, calcular su longitud así como su área.</h3>

	<div>
		<form class="form" action="" method="post">
		<input class="formInput" type="text" name="gradosCelsius" placeholder="Introduce el radio de la radio"><br>
		<input class="formButton" type="submit" value="Calcular">
	</form>
	</div>


</body>
</html>

<?php
$radio = $_POST["gradosCelsius"];
$longitud = 3.1416 * ($radio * $radio);
$area = 2 * 3.1416 * $radio;
  echo '<div class="centrado"> Longitud: ' . $longitud . '</div>';
  echo '<div class="centrado"> Area: ' . $area . '</div>';


?>

 
 

