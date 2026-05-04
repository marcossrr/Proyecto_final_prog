<!DOCTYPE html>
<html>
<head>
    <title>Mi lista de juegos</title>

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
            padding: 20px;
            color: #00d1ff;
        }

        .topbar{
            background: #1e1e1e;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #00d1ff;
        }

        .topbar a{
            color: #00d1ff;
            text-decoration: none;
            margin: 0 10px;
        }

        .topbar a:hover{
            text-decoration: underline;
        }

        .container{
            width: 95%;
            margin: auto;
        }

        .btn-add{
            display: inline-block;
            margin: 15px 0;
            padding: 10px 15px;
            background: #00d1ff;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-add:hover{
            background: #00a3c4;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
        }

        th{
            background: #00d1ff;
            color: #000;
            padding: 10px;
        }

        td{
            padding: 10px;
            border-bottom: 1px solid #333;
            text-align: center;
        }

        tr:hover{
            background: #2a2a2a;
        }

        a.action{
            color: #00d1ff;
            margin: 0 5px;
        }

        a.action:hover{
            color: #ffffff;
        }

        .auth-box{
            background: #1e1e1e;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #333;
        }
    </style>

</head>
<body>

<h1>🎮 Mis juegos</h1>

<div class="topbar">
    <div>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            Bienvenido, <b><?= $_SESSION['usuarioEmail'] ?></b>
        <?php else: ?>
            No has iniciado sesión
        <?php endif; ?>
    </div>

    <div>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="index.php?accion=logout">Cerrar Sesión</a>
        <?php else: ?>
            <a href="index.php?accion=login">Iniciar Sesión</a>
            <a href="index.php?accion=alta">Registrarse</a>
        <?php endif; ?>
    </div>
</div>

<div class="container">

<a class="btn-add" href="index.php?accion=crear">+ Agregar Juego</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Plataforma</th>
        <th>Genero</th>
        <th>Estado</th>
        <th>Puntuacion</th>
        <th>Reseña</th>
        <th>Soporte</th>
        <th>Peso</th>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <th>Acciones</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($juegos as $p): ?>
    <tr>
        <td><?= $p->getId() ?></td>
        <td><?= $p->getNombre() ?></td>
        <td><?= ($p instanceof Fisico) ? "Fisico" : "Digital"; ?></td>
        <td><?= $p->getPlataforma() ?></td>
        <td><?= $p->getGenero() ?></td>
        <td><?= $p->getEstado() ?></td>
        <td><?= $p->getPuntuacion() ?></td>
        <td><?= $p->getReseña() ?></td>
        <td><?= ($p instanceof Fisico) ? $p->getSoporte() : "--"; ?></td>
        <td><?= ($p instanceof Digital) ? $p->getPeso() : "--"; ?></td>

        <?php if (isset($_SESSION['usuario_id'])): ?>
            <td>
                <a class="action" href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                |
                <a class="action" href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
            </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>

</table>

</div>

</body>
</html>