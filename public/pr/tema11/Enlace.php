<?php

class Enlace
{

    private $name;
    private $class;


public function __construct($href, $atributos)
{
    $this->href = $href;
    $this->atributos = $atributos;

}


    public function mostrar(){

        $miEnlace = '<a href="' . $this->href . '"' . $this->atributos .'</a>';

    }

}

?>