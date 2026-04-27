<?php

class JuegosController {
    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $juegos = $this->gestor->listar();
        include "views/listar.php";
    }

        public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $plataforma = $_POST['plataforma'];
            $genero = $_POST['genero'];
            $estado = $_POST['estado'];
            $puntuacion = $_POST['puntuacion'];
            $reseña = $_POST['reseña'];

            if ($_POST['tipo']=="Fisico"){
                $soporte = $_POST['soporte']; 
                $juego = new Fisico($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $reseña, $soporte);
            }else{
                $peso = $_POST['peso'];
                $juego = new Digital ($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $reseña, $peso);
            }
            $this->gestor->agregar($juego);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }

}