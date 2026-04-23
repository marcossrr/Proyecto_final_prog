<?php

class Digital extends Juego {
    private $peso;

    public function __construct($nombre, $tipo, $plataforma, $genero, $puntuacion, $reseña, $peso, $id=0) {
        parent::__construct($nombre, $tipo, $plataforma, $genero, $puntuacion, $reseña);
        $this->peso = $peso;
    }

    public function getPeso() { return $this->peso; }
}