<?php

class Descuento implements iEnCarrito
{

    private $codigo;
    private $descuento;

    public function __construct($codigo, $descuento)
    {

        $this->codigo = $codigo;
        $this->descuento = $descuento;

    }

    public function mostrar()
    {
        return '<p class="descuento">Código: ' . $this->codigo . ' --> ' . $this->descuento . ' &euro;</p>';
    }

    public function sumarUnidad()
    {
        return false;
    }

    public function restarUnidad()
    {
        return false;
    }

    public function precio(){
        return $this->descuento;
    }

    public function precioIva()
    {
        return $this->descuento;
    }

    public function permiteUnidades()
    {
        return false;
    }
}
?>