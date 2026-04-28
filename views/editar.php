<!DOCTYPE html>
<html>
<head>
    <title>Editar Juego</title>
</head>
<body>
    <h1>Editar Juego</h1>
        <form method="POST">

       <br> Tipo:<br>
            <select name="tipo" value="<?= $juego->getTipo() ?>"  required>
                <option value="Fisico">Fisico</option>
                <option value="Digital">Digital</option>
            </select><br><br>
            
        Plataforma:<br>
        <input type="text" name="plataforma" value="<?= $vehiculo->getPlataforma() ?>"  required><br><br>

        Genero:<br>
            <select name="genero" value="<?= $juego->getGenero() ?>"  required><br><br>
                <option value="accion">Acción</option>
                <option value="aventura">Aventura</option>
                <option value="shooter">Shooter</option>
                <option value="rpg">RPG</option>
                <option value="estrategia">Estrategia</option>
                <option value="deportes">Deportes</option>
                <option value="simulacion">Simulacion</option>
                <option value="plataformas">Plataformas</option>
                <option value="carreras">Carreras</option>
                <option value="multijugador">Multijugador</option>
            </select><br><br>

        Estado:<br>
            <select name="estado" value="<?= $juego->getEstado() ?>"  required><br><br>
                <option value="completado">Completado</option>
                <option value="jugando">Jugando</option>
                <option value="pendiente">Pendiente</option>
             </select><br><br>

        Puntuacion:<br>
            <input type="number" name="puntuacion" value="<?= $juego->getPuntuacion() ?>" ><br><br>

        Reseña:<br>
            <input type="text" name="resenya" value="<?= $juego->getReseña() ?>" ><br><br>

            <?php if ($juego instanceof Fisico): ?>
        Soporte:<br>
            <input type="text" name="soporte" value="<?= $juego->getSoporte() ?>"><br><br>
            <?php endif; ?>

            <?php if ($juego instanceof Digital): ?>
        Peso:<br>
            <input type="text" name="peso" value="<?= $juego->getPeso() ?>"><br><br>
            <?php endif; ?>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>


