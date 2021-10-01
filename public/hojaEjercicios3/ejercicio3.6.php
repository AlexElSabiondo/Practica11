<!DOCTYPE html>
<html>
<head>
    <title></title>

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
            <textarea class="formTextArea" name="textoIntroducido" style="resize: none" rows="20" cols="80" placeholder="Introduce un texto"></textarea>
        </div>
        <input class="formButton" type="submit" value="Calcular">
    </form>
</div>


</body>
</html>

<?php

$textoIntroducido = $_POST['textoIntroducido'];
$tope = 0;
$longitud = strlen($textoIntroducido);

$exp = explode("\n", $textoIntroducido);
$numeroLineas = count($exp);

$caracterTexto = 0;
$caracterNumero = 0;
$numeroLineas = 0;
$caracterTab = 0;


echo '<div align="center"><textarea class="formTextArea" style="resize: none" disabled="true" cols="80" rows="'.$numeroLineas.'">'.$textoIntroducido.'</textarea></div>';

for($i = 0; $i < $longitud; $i++){

    $caracter = substr($textoIntroducido, $tope, 1);

    if(is_numeric($caracter)){

        $caracterNumero++;

    } else if($caracter == " "){

        $caracterVacio++;

    } else if ($caracter == "\n"){

        $caracterTexto--;

    } else if(is_string($caracter)){

        $caracterTexto++;

    }

    $tope++;

}

echo '<div class="centrado">Nº Caracteres en blanco: ' . $caracterTexto . '</div>';
echo '<div class="centrado">Nº Caracteres en blanco: ' . $caracterNumero . '</div>';
echo '<div class="centrado">Nº Caracteres en blanco: ' . $numeroLineas . '</div>';


/*
echo 'prueba: ' . $numeroLineas . '<br>';
echo 'Caracter texto: ' . $caracterTexto . '<br>';
echo 'Caracter numero: ' . $caracterNumero . '<br>';
echo 'Caracter vacio: ' . $caracterVacio . '<br>';;
echo 'Caracter tab: ' . $caracterTab;
*/
?>