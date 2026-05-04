<?php

class Digital extends Juego {
    private $peso;

    public function __construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $peso, $id=0) {
        parent::__construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $id);
        $this->peso = $peso;
    }

    public function getPeso() { return $this->peso; }
    public function setPeso($peso){ $this->peso = $peso; }
}