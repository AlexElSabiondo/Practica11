<?php

class Citas
{

    private $citas;

    public function __construct(){

        $archivo = "./citasConfirmadas.txt";
        $longitudArchivo = filesize($archivo);

        if($longitudArchivo != 0){

            $ficheroCitas = fopen($archivo, 'r');
            $texto = fread($ficheroCitas, $longitudArchivo);
            fclose($ficheroCitas);

            $this->citas = explode("\n", $texto);
            unset($this->citas[count($this->citas) - 1]);
            $this->citas = array_values($this->citas);


        }

        return $this->citas;

    }

    public function obtenerInformacion($indiceCita, $identificador, $identificador2 = null){

        $cita = $this->citas[$indiceCita];

        $posicionInicial = intval(strpos($cita, $identificador));

        if(!is_null($identificador2)){

            $posicionTope = intval(strpos($cita, $identificador2));
            $posicionFinal = $posicionTope - $posicionInicial;

        }

        $infoCita = substr($cita, $posicionInicial, $posicionFinal);

        $longitud = strlen($infoCita);
        $longitudIdentificador = strlen($identificador);

        $infoCita = rtrim(substr($infoCita, $longitudIdentificador, $longitud - $longitudIdentificador));

        return $infoCita;
    }

}

?>