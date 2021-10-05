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

function validar_hora($dia, $diasConHora){

    $validador = false;

    if($diasConHora[$dia]){

        foreach ($diasConHora[$dia] as $hora){

            if($hora == $_POST['hora']){

                $validador = true;

            }

        }

    } else {

        $horasDisponibles = array('09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00');

        foreach ($horasDisponibles as $hora){

            if($hora == $_POST['hora']){

                $validador = true;

            }

        }

    }

    if(!$validador){

        $errorHora = 'Esta hora ya ha sido reservada';

    }

    return $errorHora;
}

function validar_fecha($fecha){


    if(strlen($fecha) == 0){

        $errorFecha = 'Selecciona la fecha de la reserva';

    }

    return $errorFecha;
}

function comprobar_errores($errorNombre, $errorApellidos, $errorEmail, $errorTelefono, $errorHora, $errorFecha){

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

    if($errorFecha){

        $errores['fecha'] = $errorFecha;

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

function mostrar_hora(){

    $arrayHoras = array('09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00');

    echo '<select name="hora">';

    foreach ($arrayHoras as $hora){

        if($_POST['hora'] == $hora){

            echo '<option value="' . $hora . '" selected>' . $hora . '</option>';

        } else{

            echo '<option value="' . $hora . '">' . $hora . '</option>';

        }

    }

    echo '</select>';

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
    $infoCitas = 'Nombre:' . $_POST['nombre'] . ' Apellidos:' . $_POST['apellidos'] . ' Email:' . $_POST['email'] . ' Telefono:' . $_POST['telefono'] . ' Fecha:' . $_POST['fecha']. ' Hora:' . $_POST['hora'] . "\n";
    fwrite($ficheroCitas, $infoCitas);
    fclose($ficheroCitas);

    echo '<h3>La cita se ha reservado correctamente</h3>';
    echo '<h5><a href="./citasMedicas.php">Volver al formulario</a></h5>';

}

function separar_citas(){

    $archivo = "./citas.txt";
    $longitudArchivo = filesize($archivo);

    if($longitudArchivo != 0){

        $ficheroCitas = fopen($archivo, 'r');
        $texto = fread($ficheroCitas, $longitudArchivo);
        fclose($ficheroCitas);

        $citasConfirmadas = explode("\n", $texto);
        unset($citasConfirmadas[count($citasConfirmadas) - 1]);
        $citasConfirmadas = array_values($citasConfirmadas);

    }

    return $citasConfirmadas;
}

function separar_dias($citasConfirmadas){

    foreach ($citasConfirmadas as $cita){

        $fecha = substr($cita, strpos($cita, 'Fecha:'), 16);
        $fecha = substr($fecha, 6, 10);

        $diasCitasConfirmadas[$fecha] = '';

    }

    return $diasCitasConfirmadas;
}

function asignar_horas_dias($citasConfirmadas, $horasDisponibles){

    $diasConHora = [];

    foreach ($citasConfirmadas as $cita){

        $i = 0;

        $fecha = substr($cita, strpos($cita, 'Fecha:'), 16);
        $fecha = substr($fecha, 6, 10);

        $hora = substr($cita, strpos($cita, 'Hora:'), 10);
        $hora = substr($hora, 5, 5);

        foreach ($horasDisponibles as $horaDisponible){

            if($hora == $horaDisponible){

                unset($horasDisponibles[$i]);
                $horasDisponibles = array_values($horasDisponibles);

            }

            $i++;

        }

        $diasConHora[$fecha] = $horasDisponibles;

    }

    return $diasConHora;

}

function horas_disponibles($diaCitasConfirmadas){

    foreach ($diaCitasConfirmadas as $dia){

        if($diaCitasConfirmadas[$dia]){

            $horasDisponibles = $diaCitasConfirmadas[$dia];
            $diasConHora = asignar_horas_dias(separar_citas(), $horasDisponibles);

        } else {

            $horasDisponibles = array('09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00');
            $diasConHora = asignar_horas_dias(separar_citas(), $horasDisponibles);

        }

    }

    return $diasConHora;
}

?>
