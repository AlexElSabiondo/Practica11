<?php

class Producto implements iEnCarrito
{

    private $nombre;
    private $precio;
    private $iva;
    public $cantidad = 1;

    public function __construct($nombre, $precio, $iva = 21)
    {

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;

    }

    public function mostrar()
    {
        return '<p><span>(x' . $this->cantidad . ') ' . $this->nombre . ' ---> ' . $this->precio . "&euro;" . ' ( +' . $this->iva . '% de IVA)</span></p>';
    }

    public function sumarUnidad($cantidad = 1)
    {

        $this->cantidad += $cantidad;

    }

    public function restarUnidad()
    {
        if($this->cantidad != 0){

            $this->cantidad--;

        }
    }

    public function precio(){

        return $this->precio = $this->precio * $this->cantidad;

    }

    public function precioIva(){

        return round($this->precio * ($this->iva / 100), 2);

    }

    public function permiteUnidades()
    {
        return true;
    }

}

?>
