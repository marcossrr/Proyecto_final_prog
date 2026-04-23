<?php

abstract class Juego {
    protected $id;
    protected $nombre;
    protected $tipo;
    protected $plataforma;
    protected $genero;
    protected $estado;
    protected $puntuacion;
    protected $reseña;


    public function __construct($id, $nombre, $tipo, $plataforma, $genero, $puntuacion, $reseña) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->plataforma = $plataforma;
        $this->genero = $genero;
        $this->puntuacion = $reseña;
        $this->reseña = $reseña;
    }

    public function getNombre(){ return $this->nombre; }
    public function getTipo(){ return $this->tipo; }
    public function getPlataforma(){ return $this->plataforma; }
    public function getGenero(){ return $this->genero; }
    public function getEstado(){ return $this->estado; }
    public function getPuntuacion(){ return $this->puntuacion; }
    public function getReseña(){ return $this->reseña; }

}