<?php

class GestorPDO {
    private $conn;

    public function __construct(){
        $this->conn = Connection::getInstance()->getConnection();
    }

    public function listar() {
        $consulta="SELECT * FROM juegos";
        $rtdo=$this->conn->query($consulta);
        $arrayjuegos=[];
         while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            if ($value['tipo']=="Fisico"){
                $juego = new Fisico ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['resenya'], $value['soporte'], $value['id']);
            }else{
                $juego = new Digital ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['resenya'], $value['peso'], $value['id']);
            }

            $arrayjuegos[]=$juego;
        }
        return $arrayjuegos;
    }

        public function buscar($id) {
        $sql = "SELECT * FROM juegos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
 
        if ($value = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($value['tipo']=="Fisico"){
                return new Fisico ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['resenya'], $value['soporte'], $value['id']);
            }else{
                return new Digital ($value['nombre'], $value['tipo'], $value['plataforma'], $value['genero'], $value['estado'], $value['puntuacion'], $value['resenya'], $value['peso'], $value['id']);
            }
        }
        return null;
    }

    public function agregar($juego) {
        try{
            if ($juego instanceof Fisico){
                $sql = "INSERT INTO juegos (id, nombre, tipo, plataforma, genero, estado, puntuacion, resenya, soporte) VALUES (:id, :nombre, :tipo, :plataforma, :genero, :estado, :puntuacion, :resenya, :soporte)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':id', $juego->getId());
                $stmt->bindValue(':nombre', $juego->getNombre());
                $stmt->bindValue(':tipo', "Fisico");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':resenya', $juego->getReseña());
                $stmt->bindValue(':soporte', $juego->getSoporte());
            }else{                
                $sql = "INSERT INTO juegos (nombre, tipo, plataforma, genero, estado, puntuacion, resenya, peso) VALUES (:nombre, :tipo, :plataforma, :genero, :estado, :puntuacion, :resenya, :peso)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':nombre', $juego->getNombre());
                $stmt->bindValue(':tipo', "Digital");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':resenya', $juego->getReseña());
                $stmt->bindValue(':peso', $juego->getPeso());
            }
            return $stmt->execute(); 

        } catch (PDOException $e) {

             echo $e->getMessage() . $e->getCode();
        }
    }

    public function actualizar($juego) {
        try{
        if ($juego instanceof Fisico){
            $sql = "UPDATE juegos SET tipo=:tipo, plataforma=:plataforma, genero=:genero, estado=:estado, puntuacion=:puntuacion, resenya=:resenya, soporte=:soporte WHERE id=:id";
             $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':id', $juego->getId());
                $stmt->bindValue(':tipo', "Fisico");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':resenya', $juego->getReseña());
                $stmt->bindValue(':soporte', $juego->getSoporte());
        }else{  
            $sql = "UPDATE juegos SET tipo=:tipo, plataforma=:plataforma, genero=:genero, estado=:estado, puntuacion=:puntuacion, resenya=:resenya, soporte=:soporte WHERE id=:id";
             $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':id', $juego->getId());
                $stmt->bindValue(':tipo', "Digital");
                $stmt->bindValue(':plataforma', $juego->getPlataforma());
                $stmt->bindValue(':genero', $juego->getGenero());
                $stmt->bindValue(':estado', $juego->getEstado());
                $stmt->bindValue(':puntuacion', $juego->getPuntuacion());
                $stmt->bindValue(':resenya', $juego->getReseña());
                $stmt->bindValue(':peso', $juego->getPeso());
            }
               return $stmt->execute(); 
            
        } 
          catch (PDOException $e) {
          die("Error de la base de datos al actualizar: " . $e->getMessage());
        }
    }

     public function registrarUsuario(Usuario $usuario) {
        try {
            $sql = "INSERT INTO Usuario (email, password) VALUES (:email, :password)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bindValue(':email', $usuario->getEmail());
            $stmt->bindValue(':password', $usuario->getPassword());

            return $stmt->execute(); 
            
        } catch (PDOException $e) {
            echo $e->getMessage() . $e->getCode();
        }
    }

    public function buscarUsuarioPorEmail($email) {
        $sql = "SELECT * FROM Usuario WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $value = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($value) {
            return new Usuario($value['email'], $value['password'], $value['id']);
        }
        return false;
    }
}