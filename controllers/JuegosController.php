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
            $puntuacion = $_POST['puntuacion'] !== "" ? $_POST['puntuacion'] : null;
            $resenya = $_POST['resenya'] !== "" ? $_POST['resenya'] : null;

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

    if (!$id) {
        header("Location: index.php");
        exit;
    }

    $juego = $this->gestor->buscar($id);

    if (!$juego) {
        header("Location: index.php");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $juego->setTipo($_POST['tipo']);
        $juego->setPlataforma($_POST['plataforma']);
        $juego->setGenero($_POST['genero']);
        $juego->setEstado($_POST['estado']);
        $juego->setPuntuacion($_POST['puntuacion'] ?: null);
        $juego->setReseña($_POST['resenya']);

        if ($juego instanceof Fisico) {
            $juego->setSoporte($_POST['soporte'] ?? null);
        }

        if ($juego instanceof Digital) {
            $juego->setPeso($_POST['peso'] ?? null);
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
