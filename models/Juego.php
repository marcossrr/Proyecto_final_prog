<?php

abstract class Juego {
    protected $nombre;
    protected $tipo;
    protected $plataforma;
    protected $genero;
    protected $estado;
    protected $puntuacion;
    protected $resenya;
    protected $id;


    public function __construct($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $id=0) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->plataforma = $plataforma;
        $this->genero = $genero;
        $this->estado = $estado;
        $this->puntuacion = $puntuacion;
        $this->resenya = $resenya;
        $this->id=$id;
    }

    public function getNombre(){ return $this->nombre; }
    public function getTipo(){ return $this->tipo; }
    public function getPlataforma(){ return $this->plataforma; }
    public function getGenero(){ return $this->genero; }
    public function getEstado(){ return $this->estado; }
    public function getPuntuacion(){ return $this->puntuacion; }
    public function getReseña(){ return $this->resenya; }
    public function getId(){ return $this->id; }

    public function setTipo($tipo){ $this->tipo = $tipo; }
    public function setPlataforma($plataforma){ $this->plataforma = $plataforma; }
    public function setGenero($genero){ $this->genero = $genero; }
    public function setEstado($estado){ $this->estado = $estado; }
    public function setPuntuacion($puntuacion){ $this->puntuacion = $puntuacion; }
    public function setResenya($resenya){ $this->resenya = $resenya; } 
    public function setId($id){ $this->id = $id; }

}