<!DOCTYPE html>
<html>
<head>
    <title>Añadir Juegos</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #121212;
            color: #eaeaea;
            margin: 0;
            padding: 0;
        }

        h1{
            text-align: center;
            color: #00d1ff;
            margin-top: 20px;
        }

        .container{
            width: 420px;
            margin: 30px auto;
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.6);
        }

        label{
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            color: #ccc;
        }

        input, select{
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: none;
            margin-bottom: 10px;
            background: #2a2a2a;
            color: white;
        }

        button{
            width: 100%;
            padding: 10px;
            background: #00d1ff;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover{
            background: #00a3c4;
        }

        a{
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #00d1ff;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }
    </style>

</head>

<body>

<h1>🎮 Añadir Juego</h1>

<div class="container">

<form method="POST">

    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <label>Tipo</label>
    <select name="tipo" required>
        <option value="Fisico">Fisico</option>
        <option value="Digital">Digital</option>
    </select>

    <label>Plataforma</label>
    <input type="text" name="plataforma" required>

    <label>Genero</label>
    <select name="genero" required>
        <option value="accion">Acción</option>
        <option value="aventura">Aventura</option>
        <option value="shooter">Shooter</option>
        <option value="rpg">RPG</option>
        <option value="estrategia">Estrategia</option>
        <option value="deportes">Deportes</option>
        <option value="simulacion">Simulación</option>
        <option value="plataformas">Plataformas</option>
        <option value="carreras">Carreras</option>
        <option value="multijugador">Multijugador</option>
    </select>

    <label>Estado</label>
    <select name="estado" required>
        <option value="completado">Completado</option>
        <option value="jugando">Jugando</option>
        <option value="pendiente">Pendiente</option>
    </select>

    <label>Puntuación</label>
    <input type="number" name="puntuacion">

    <label>Reseña</label>
    <input type="text" name="resenya">

    <label>Soporte (solo físico)</label>
    <input type="text" name="soporte">

    <label>Peso (solo digital)</label>
    <input type="text" name="peso">

    <button type="submit">💾 Guardar</button>

</form>

<a href="index.php">← Volver</a>

</div>

</body>
</html>