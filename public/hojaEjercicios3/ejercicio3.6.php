<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"
          href="../styles.css">

</head>
<body style="background-color:#fffee9;">

<h1 class="mainBox">Ejercicio 3.6</h1>
<h3 class="secundaryBox">Escribir un programa que cuente de un texto dado:

    Nº de caracteres en blanco.
    Nº de dígitos
    Nº de letras
    Nº de líneas
    Nº de otros caracteres
</h3>

<div>
    <form class="form" action="" method="post">
        <div>
            <textarea class="formTextArea" name="textoIntroducido" style="resize: none" rows="10" cols="80" placeholder="Introduce un texto"></textarea>
        </div>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$textoIntroducido = $_POST['textoIntroducido'];
$tope = 0;
$longitud = mb_strlen($textoIntroducido);

$exp = explode("\n", $textoIntroducido);

$caracterTexto = 0;
$caracterVacio = 0;
$caracterNumero = 0;
$numeroLineas = 0;
$caracterTab = 0;
$caracterEspecial = 0;

echo '<div align="center"><textarea class="formTextArea" style="resize: none" disabled="true" cols="80" rows="'.count($exp).'">'.$textoIntroducido.'</textarea></div>';

for($i = 0; $i < $longitud; $i++){

    $caracter = mb_substr($textoIntroducido, $tope, 1, 'UTF-8');

    if(preg_match("/^[[:digit:]]+$/", $caracter)){

        $caracterNumero++;

    } else if($caracter == " "){

        $caracterVacio++;

    }else if(preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]/", $caracter)){

        $caracterTexto++;

    } else if(preg_match('/\s/', $caracter) == false){

        $caracterEspecial++;

    }

    $tope++;

}

echo '<div class="centrado">Nº de Espacios Blancos: ' . $caracterVacio . '</div>';
echo '<div class="centrado">Nº de Números: ' . $caracterNumero . '</div>';
echo '<div class="centrado">Nº de Letras: ' . $caracterTexto . '</div>';
echo '<div class="centrado">Nº de Líneas: ' . count($exp) . '</div>';
echo '<div class="centrado">Nº de Otros Carácteres: ' . $caracterEspecial . '</div>';

?>