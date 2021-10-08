<?php

class Carrito
{

    private $elementos = [];

    public function incluirElemento($elemento)
    {

        $this->elementos[] = $elemento;

    }

    public function mostrar()
    {

        echo '<div class"carrito">';

        foreach ($this->elementos as $key => $elemento){

            $enlaceSumarUnidad = '?accion=sumarunidad&key=' . $key;
            $enlaceRestarUnidad = '?accion=restarunidad&key=' . $key;


            echo '<article class="lineacarrito">';

            echo $elemento->mostrar();

            echo '<a href="' . $enlaceSumarUnidad . '"> + </a> / <a href="' . $enlaceRestarUnidad . '"> - </a>';

            echo '</article>';

        }

        echo '</div>';

    }

    public function sumarUnidad($key){

        $this->elementos[$key]->sumarUnidad();

    }

    public function restarUnidad($key){

        $this->elementos[$key]->restarUnidad();

    }

}

?>
