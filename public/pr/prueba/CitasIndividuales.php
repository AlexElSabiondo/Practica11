<?php

class CitasIndividuales extends Citas
{

    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;
    private $fecha;
    private $hora;

    public function __construct()
    {

        $citas = parent::__construct();

    }

}

?>
