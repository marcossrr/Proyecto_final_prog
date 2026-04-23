<?php

class Fisico extends Juego {
    private $soporte; //disco, tarjeta sd, cartucho...

    public function __construct($nombre, $tipo, $plataforma, $genero, $puntuacion, $reseña, $soporte, $id=0){
        parent::__construct($nombre, $tipo, $plataforma, $genero, $puntuacion, $reseña);
        $this->soporte = $soporte;
    }

    public function getSporte() { return $this->soporte; }
}