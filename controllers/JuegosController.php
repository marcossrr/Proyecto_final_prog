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
            $resenya = $_POST['resenya'];

            if ($_POST['tipo']=="Fisico"){
                $soporte = $_POST['soporte']; 
                $juego = new Fisico($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $soporte);
            }else{
                $peso = $_POST['peso'];
                $juego = new Digital ($nombre, $tipo, $plataforma, $genero, $estado, $puntuacion, $resenya, $peso);
            }

            $this->gestor->agregar($juego);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        $vehiculo=($this->gestor->buscar($id));
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $juego->setTipo($_POST['tipo']);
            $juego->setPlataforma($_POST['plataforma']);
            $juego->setGenero($_POST['genero']);
            $juego->setEstado($_POST['estado']);
            $juego->setPuntuacion($_POST['puntuacion']);
            $juego->setReseña($_POST['resenya']);

            if ($juego instanceof Fisico) {
                $juego->setSoporte($_POST['soporte']);
            }else{
                $juego->setPeso($_POST['peso']);
            }
            
            $this->gestor->actualizar($juego);
            header("Location: index.php");
            exit;
        }

        include "views/editar.php";
    }

        public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
}
