CREATE DATABASE Videojuegos;
USE Videojuegos;

CREATE TABLE juegos (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    tipo ENUM('fisico', 'digital') NOT NULL,
    plataforma VARCHAR(25) NOT NULL,
    genero ENUM(
        'accion',
        'aventura',
        'shooter',
        'rpg',
        'estrategia',
        'deportes',
        'simulacion',
        'plataformas',
        'carreras',
        'multijugador'
    ) NOT NULL,
    estado ENUM('completado', 'jugando', 'pendiente') NOT NULL,
    puntuacion INT DEFAULT NULL,
    resenya VARCHAR(255) DEFAULT NULL,
    soporte VARCHAR(25) DEFAULT NULL,
    peso VARCHAR(25) DEFAULT NULL,
    PRIMARY KEY (id)
) 