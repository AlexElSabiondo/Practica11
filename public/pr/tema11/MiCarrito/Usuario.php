<?php

class Usuario
{

    private $nombreUsuario;
    private $claveUsuario;
    private $carrito;

    public function __construct($nombreUsuario, $claveUsuario, $carrito = null)
    {

        $this->nombreUsuario = $nombreUsuario;
        $this->claveUsuario = $claveUsuario;
        $this->carrito = $carrito;

    }

    public function registrar(){

        $archivo = 'usuarios.txt';
        $ficheroUsuarios = fopen($archivo, 'a+');
        $informacion = 'Nombre:' . $this->nombreUsuario . ' Clave:' . $this->claveUsuario . "\n";
        fwrite($ficheroUsuarios, $informacion);
        fclose($ficheroUsuarios);

    }

    public function obtener_usuarios(){

        $archivo = 'usuarios.txt';
        $longitudArchivo = filesize($archivo);

        if($longitudArchivo != 0){

            $ficheroUsuarios = fopen($archivo, 'r');
            $usuariosRegistrados = fread($ficheroUsuarios, $longitudArchivo);
            fclose($ficheroUsuarios);

            $usuariosRegistrados = explode("\n", $usuariosRegistrados);
            unset($usuariosRegistrados[count($usuariosRegistrados) - 1]);
            $usuariosRegistrados = array_values($usuariosRegistrados);

        } else {

            $usuariosRegistrados = false;

        }

        return $usuariosRegistrados;
    }

    public function separar_informacion($usuariosRegistrados, $indiceUsuario, $infoId1, $infoId2 = null){

        $usuario = $usuariosRegistrados[$indiceUsuario];

        $posicionInicial = intval(strpos($usuario, $infoId1));

        if(!is_null($infoId2)){

            $posicionTope = intval(strpos($usuario, $infoId2));
            $posicionFinal = $posicionTope - $posicionInicial;

        }

        $infoUsuario = substr($usuario, $posicionInicial, $posicionFinal);

        $longitudInfoUsuario = strlen($infoUsuario);
        $longitudId = strlen($infoId1);

        $infoUsuario = rtrim(substr($infoUsuario, $longitudId, $longitudInfoUsuario - $longitudId));

        return $infoUsuario;
    }

    public function comprobar_registro($usuariosRegistrados){

        $registrado = false;

        if($usuariosRegistrados){

            foreach ($usuariosRegistrados as $key => $usuario) {

                $nombreUsuarioRegistrado = $this->separar_informacion($usuariosRegistrados, $key, 'Nombre:', 'Clave:');

                if($this->nombreUsuario == $nombreUsuarioRegistrado){

                    $registrado = $key;

                }

            }

        }

        return $registrado;

    }

}

?>
