<?php

function mostrarErrores($datos){

    echo '<ul>';

    foreach ($datos as $error){

        echo '<li>' . $error . '</li>';

    }

    echo '</ul><br>';
}

function mostrarCampo($campo){

    if(isset($_POST['campo'])){

        echo 'value="'. $_POST['campo'] . '"';

    }

}

function mostrarErrorCampo($campo, $errores){

    if(isset($errores[$campo])){

        echo '<span>' . $errores[$campo] . '</span>';

    }

}

?>