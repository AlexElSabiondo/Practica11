<?php

function validar_nombre($nombre){

    $nombreValido = comprobar_solo_letras($nombre);

    if(strlen($nombre) == 0){

        $errorNombre = 'Introduce tu nombre';

    } else if($nombreValido == false){

        $errorNombre = 'Solo se admiten letras';

    }else if(mb_strlen($nombre) < 3){

        $errorNombre = 'El nombre es demasiado corto';

    }

    return $errorNombre;
}

function validar_apellidos($apellidos){

    $apellidoValido = comprobar_solo_letras($apellidos);

    if(strlen($apellidos) == 0){

        $error_apellidos = 'Introduce tus apellidos';

    } else if($apellidoValido == false){

    $error_apellidos = 'Solo se admiten letras';

    } else if (mb_strlen($apellidos) < 6){

        $error_apellidos = 'El apellido es demasiado corto';

    }

    return $error_apellidos;
}

function validar_email($email){

    if(mb_strlen($email) == 0){

        $errorMail = 'Introduce un email';

    }

    return $errorMail;
}

function validar_telefono($telefono){

    if(strlen($telefono) == 0){

        $errorTelefono = 'Introduce tu número de telefono';

    } else if((preg_match("/^([0-9])*$/", $telefono)) == false){

        $errorTelefono = 'Solo se admiten números';

    }else if(strlen($telefono) != 9){

        $errorTelefono = 'La longitud de tu número de telefono no es correcta';

    } else if(substr($telefono, 0,1) != 6 && substr($telefono, 0,1) != 7){

        $errorTelefono = 'El teléfono móvil debe ser de españa';

    }

    return $errorTelefono;
}

function comprobar_errores($errorNombre, $errorApellidos, $errorEmail, $errorTelefono){

    $errores = [];

    if($errorNombre){

        $errores['nombre'] = $errorNombre;

    }

    if($errorApellidos){

        $errores['apellidos'] = $errorApellidos;

    }

    if($errorEmail){

        $errores['email'] = $errorEmail;

    }

    if($errorTelefono){

        $errores['telefono'] = $errorTelefono;

    }

    return $errores;
}

function mostrar_error($errores, $campo){

if(isset($errores[$campo])){

    echo $errores[$campo];

}

}

function mostrar_campos_introducidos($campo){

    if(isset($_POST[$campo])){

        echo 'value="' . $_POST[$campo] . '"';

    }

}

function comprobar_solo_letras($texto){

    $longitud = mb_strlen($texto);
    $tope = 0;
    $textoValido = true;

    for($i = 0; $i < $longitud; $i++){

        $caracter = mb_substr($texto, $tope, 1, 'UTF-8');

        if((preg_match("/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]/", $caracter)) == false){

            $textoValido = false;

        }

        $tope++;

    }

    return $textoValido;
}

?>
