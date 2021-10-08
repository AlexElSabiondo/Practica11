<?php

class Sesion
{

    private $usuarios = [];
    private $carrito;

    public function __construct($carrito, $usuario)
    {

        $this->carrito = $carrito;
        $this->usuarios[$usuario] = $this->carrito;

    }

    public function mostrar($usuario){

        $this->usuarios[$usuario]->mostrar();

    }

}

?>
