<!DOCTYPE html>
<html>
<head>
    <title>Añadir Juegos</title>
</head>
<body>
    <h1>Añadir Juegos</h1>

    <form method="POST">
        Nombre:<br>
        <input type="text" name="nombre" required><br>
        <br> Tipo:<br>
        <select name="tipo" required>
            <option value="Fisico">Fisico</option>
            <option value="Digital">Digital</option>
        </select><br><br>
        Plataforma:<br>
        <input type="text" name="plataforma" required><br><br>
        Genero:<br>
        <select name="genero" required><br><br>
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
        <select name="estado" required><br><br>
            <option value="completado">Completado</option>
            <option value="jugando">Jugando</option>
            <option value="pendiente">Pendiente</option>
        </select><br><br>
        Puntuacion:<br>
        <input type="number" name="puntuacion"><br><br>
        Reseña:<br>
        <input type="text" name="resenya"><br><br>
        Soporte:<br>
        <input type="text" name="soporte"><br><br>
        Peso:<br>
        <input type="text" name="peso"><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>

