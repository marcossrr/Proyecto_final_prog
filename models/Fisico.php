<?php

class Fisico extends Juego {
    private $soporte; //disco, tarjeta sd, cartucho...

    public function __construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $soporte, $id=0){
        parent::__construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $id);
        $this->soporte = $soporte;
    }

    public function getSoporte() { return $this->soporte; }
    public function setSoporte($soporte){ $this->soporte = $soporte; }
}