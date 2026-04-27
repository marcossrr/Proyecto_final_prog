<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Mis juegos </h1>
<a href="index.php?accion=crear">Agregar Vehículo</a><p>
    
    <table border="1" cellpadding="10">
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
            <td><?= $p->getPuntacion() ?></td>
            <td><?= $p->getReseña() ?></td>
            <td><?= ($p instanceof Fisico) ? $p->getSoporte() : "--"; ?></td>
            <td><?= ($p instanceof Digital) ? $p->getPeso() : "--"; ?></td>

            
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <td>
                    <a href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                    
                    <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
                    </td>
                <?php endif; ?>    
            
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>