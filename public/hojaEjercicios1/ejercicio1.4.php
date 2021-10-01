 <!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css"
	href="../styles.css">

</head>
<body style="background-color:#fffee9;">

	<h1 class="mainBox">Ejercicio 1.4</h1>
	<h3 class="secundaryBox">Crear un programa que calcule la fuerza de atracción gravitacional entre dos masas M1 y M2 situadas a una distancia R, donde las masas se expresan en kilogramos y la distancia en metros y la constante de gravitación universal es G=6.67x10^(-11) Nw*m^2/Kg^2</h3>

	<div>
		<form class="form" action="" method="post">
		<input class="formInput" type="text" name="masa1" placeholder="Introduce la masa 1"><br>
		<input class="formInput" type="text" name="masa2" placeholder="Introduce la masa 2"><br>
		<input class="formInput" type="text" name="distancia" placeholder="Introduce la distancia entre las masas"><br>
		<input class="formButton" type="submit" value="Convertir">
	</form>
	</div>


</body>
</html>

<?php
$masa1 = $_POST["masa1"];
$masa2 = $_POST["masa2"];
$distancia = $_POST["distancia"];
$fuerzaGravitacion = (6.67 * pow(10, -11)) * (($masa1 * $masa2) / $distancia);
  echo '<div class="centrado">La fuerza de gravitación para ' . $masa1 . 'kg y ' . $masa2 . 'kg y con una distancia de ' . $distancia . 'm es de ' . $fuerzaGravitacion . 'N</div>';

?>

 