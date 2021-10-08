<?php

class Enlace extends Etiqueta
{

    public function __construct($texto, $url)
    {

        parent::__construct('a', $texto, 'href="' . $url . '');

    }

}

?>