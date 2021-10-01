 <!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css"
	href="../styles.css">

</head>
<body style="background-color:#fffee9;">

	<h1 class="mainBox">Ejercicio 1.1</h1>
	<h3 class="secundaryBox">Dado un valor en pesetas, convertirlo a euros. La solución deberá tener dos decimales</h3>

	<div>
		<form class="form" action="" method="post">
		<input class="formInput" type="text" name="pesetas" placeholder="Introduce el número de pesetas"><br>
		<input class="formButton" type="submit" value="Convertir">
	</form>
	</div>


</body>
</html>

<?php
$valor1 = $_POST["pesetas"];
$valor2 = round($valor1 / 166.3860, 2);
  echo '<div class="centrado">'. $valor1 . ' pesetas son  ' . $valor2 . ' pesetas</div>';

?>

 
