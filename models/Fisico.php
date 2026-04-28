<?php

class Fisico extends Juego {
    private $soporte; //disco, tarjeta sd, cartucho...

    public function __construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $reseña, $soporte){
        parent::__construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $reseña);
        $this->soporte = $soporte;
    }

    public function getSoporte() { return $this->soporte; }
}