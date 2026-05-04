<!DOCTYPE html>
<html>
<head>
    <title>Editar Juego</title>

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
            width: 400px;
            margin: 30px auto;
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
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

<h1>🎮 Editar Juego</h1>

<div class="container">

<form method="POST">

    <label>Tipo</label>
    <select name="tipo" required>
        <option value="Fisico" <?= $juego->getTipo() == "Fisico" ? "selected" : "" ?>>Fisico</option>
        <option value="Digital" <?= $juego->getTipo() == "Digital" ? "selected" : "" ?>>Digital</option>
    </select>

    <label>Plataforma</label>
    <input type="text" name="plataforma" value="<?= $juego->getPlataforma() ?>" required>

    <label>Genero</label>
    <select name="genero" required>
        <option value="accion" <?= $juego->getGenero() == "accion" ? "selected" : "" ?>>Acción</option>
        <option value="aventura" <?= $juego->getGenero() == "aventura" ? "selected" : "" ?>>Aventura</option>
        <option value="shooter" <?= $juego->getGenero() == "shooter" ? "selected" : "" ?>>Shooter</option>
        <option value="rpg" <?= $juego->getGenero() == "rpg" ? "selected" : "" ?>>RPG</option>
        <option value="estrategia" <?= $juego->getGenero() == "estrategia" ? "selected" : "" ?>>Estrategia</option>
        <option value="deportes" <?= $juego->getGenero() == "deportes" ? "selected" : "" ?>>Deportes</option>
        <option value="simulacion" <?= $juego->getGenero() == "simulacion" ? "selected" : "" ?>>Simulación</option>
        <option value="plataformas" <?= $juego->getGenero() == "plataformas" ? "selected" : "" ?>>Plataformas</option>
        <option value="carreras" <?= $juego->getGenero() == "carreras" ? "selected" : "" ?>>Carreras</option>
        <option value="multijugador" <?= $juego->getGenero() == "multijugador" ? "selected" : "" ?>>Multijugador</option>
    </select>

    <label>Estado</label>
    <select name="estado" required>
        <option value="completado" <?= $juego->getEstado() == "completado" ? "selected" : "" ?>>Completado</option>
        <option value="jugando" <?= $juego->getEstado() == "jugando" ? "selected" : "" ?>>Jugando</option>
        <option value="pendiente" <?= $juego->getEstado() == "pendiente" ? "selected" : "" ?>>Pendiente</option>
    </select>

    <label>Puntuación</label>
    <input type="number" name="puntuacion" value="<?= $juego->getPuntuacion() ?>">

    <label>Reseña</label>
    <input type="text" name="resenya" value="<?= $juego->getReseña() ?>">

    <?php if ($juego instanceof Fisico): ?>
        <label>Soporte</label>
        <input type="text" name="soporte" value="<?= $juego->getSoporte() ?>">
    <?php endif; ?>

    <?php if ($juego instanceof Digital): ?>
        <label>Peso</label>
        <input type="text" name="peso" value="<?= $juego->getPeso() ?>">
    <?php endif; ?>

    <button type="submit">💾 Guardar</button>

</form>

<a href="index.php">← Volver</a>

</div>

</body>
</html>