<?php

class GestorPDO extends Connection {
    public function __construct(){
        parent::__construct();
    }

    public function listar() {
        $consulta="SELECT * FROM juegos";
        $rtdo=$this->conn->query($consulta);
        $arrayjuegos=[];
         while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            if ($value['tipo']=="Fisico"){
                $juego = new Fisico ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['reseña'], $value['soporte'], $value['id']);
            }else{
                $juego = new Digital ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['reseña'], $value['peso'], $value['id']);
            }

            $arrayjuegos[]=$juegos;
        }
        return $arrayjuegos;
    }

    public function agregar($juego) {
        try{
            if ($juego instanceof Fisico){
                $sql = "INSERT INTO juegos (nombre, tipo, plataforma, genero, estado, puntuacion, reseña, soporte) VALUES (:nombre, :tipo, :plataforma, :genero, :estado, :puntuacion, :reseña, :soporte)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':nombre', $juego->getNombre());
                $stmt->bindValue(':tipo', "Fisico");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':reseña', $juego->getReseña());
                $stmt->bindValue(':soporte', $juego->getSoporte());
            }else{                
                $sql = "INSERT INTO juegos (nombre, tipo, plataforma, genero, estado, puntuacion, reseña, peso) VALUES (:nombre, :tipo, :plataforma, :genero, :estado, :puntuacion, :reseña, :peso)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':nombre', $juego->getNombre());
                $stmt->bindValue(':tipo', "Digital");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':reseña', $juego->getReseña());
                $stmt->bindValue(':peso', $juego->getPeso());
            }
            return $stmt->execute(); 
            
        } catch (PDOException $e) {

            return false;
        }
    }
}