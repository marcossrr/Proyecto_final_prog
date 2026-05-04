<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>

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
            width: 380px;
            margin: 40px auto;
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

        input{
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

        .error{
            background: #ff4d4d;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: center;
        }

        a{
            color: #00d1ff;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }

        .links{
            text-align: center;
            margin-top: 15px;
        }

        .back{
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #00d1ff;
        }

        .checkbox{
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .checkbox input{
            width: auto;
            margin: 0;
        }
    </style>

</head>

<body>

<h1>🔐 Iniciar Sesión</h1>

<div class="container">

    <?php if (isset($error)): ?>
        <div class="error">
            ❌ <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="POST">

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <div class="checkbox">
            <input type="checkbox" name="recordarme">
            <span>Recordarme en este equipo</span>
        </div>

        <button type="submit">🚀 Entrar</button>

    </form>

    <div class="links">
        <p>¿No tienes cuenta? <a href="index.php?accion=alta">Regístrate aquí</a></p>
    </div>

    <a class="back" href="index.php">← Volver al inicio</a>

</div>

</body>
</html>