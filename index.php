<?php
require_once "autoload.php";
session_start();

$gestor = new GestorPDO;
$juegosController = new JuegosController($gestor);
$usuarioController = new UsuarioController($gestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion){
    case 'crear':
        $juegosController->crear();
    break;
    default:
        $juegosController->index();
}