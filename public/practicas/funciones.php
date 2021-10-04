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

function validar_hora($hora, $horasDisponibles){

    foreach ($horasDisponibles as $horaDisponible){

        if($horaDisponible == $hora){

            $horaCorrecta = true;

        }

    }

    $errorHora = $horaCorrecta == true ? '' : 'La hora introducida no está disponible';

    return $errorHora;
}

function comprobar_errores($errorNombre, $errorApellidos, $errorEmail, $errorTelefono, $errorHora){

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

    if($errorHora){

        $errores['hora'] = $errorHora;

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

function añadir_cita(){

    $archivo = "./citas.txt";

    $ficheroCitas = fopen($archivo, 'a+');
    $infoCitas = 'Nombre:' . $_POST['nombre'] . ' Apellidos:' . $_POST['apellidos'] . ' Email:' . $_POST['email'] . ' Telefono:' . $_POST['telefono'] . ' Fecha:' . $_POST['calendario'] . ' Hora:' . $_POST['hora'] . "\n";
    fwrite($ficheroCitas, $infoCitas);
    fclose($ficheroCitas);

    echo '<h3>La cita se ha reservado correctamente</h3>';

}

function separar_citas(){

    $archivo = "./citas.txt";
    $longitudArchivo = filesize($archivo);

    if($longitudArchivo != 0){

        $ficheroCitas = fopen($archivo, 'r');
        $texto = fread($ficheroCitas, $longitudArchivo);
        fclose($ficheroCitas);

        $citasConfirmadas = explode("\n", $texto);

    }

    return $citasConfirmadas;
}

function horas_disponibles(){

    $horasDisponibles = array('09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30');

    $citasConfirmadas = separar_citas();

    foreach ($citasConfirmadas as $cita){

        $i = 0;
        $hora = substr($cita, strpos($cita, 'Hora:'), 10);
        $hora = substr($hora, 5, 5);

        foreach ($horasDisponibles as $horaDisponible){

            if($hora == $horaDisponible){

                unset($horasDisponibles[$i]);

            }

            $i++;

        }

    }

    return $horasDisponibles;
}

function mostrar_horas_disponible($horas){

    if($horas){

        foreach ($horas as $hora){

            $horasDisponibles .= $hora . ' / ';

        }

        echo '<h4>Horas disponibles</h4>';
        echo $horasDisponibles . '<br> <br>';

    } else{

        echo '<h4>No hay horas disponibles</h4>';

    }

}

?>
