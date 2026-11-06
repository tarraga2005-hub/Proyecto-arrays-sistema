<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #7DD3FC; /* Azul claro */ /* cite: 1 */
        }

        /* Tarjeta principal */
        .login-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            width: 350px;
            text-align: center;
        }

        h1 {
            color: #000000;
            font-size: 22px;
            margin-bottom: 5px;
        }

        h2 {
            color: #555555;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            color: #333333;
            font-size: 14px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        /* Casilla de verificación */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            text-align: left;
        }

        .checkbox-group label {
            margin-bottom: 0;
            font-size: 13px;
        }

        /* Botón de envío */
        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #0284c7;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <main class="login-card">
        <h1>Bienvenido al sistema</h1>
        <h2>Introduce tus credenciales</h2>
        
        <form action="validar.php" method="POST">
            <!-- Nombre -->
            <div class="input-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $_COOKIE['nombreUsuario'] ?? '';?>"required />
            </div>

            <!-- Contraseña -->
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" value="<?php echo $_COOKIE['contrasenaUsuario'] ?? ''?>" required />
            </div>

            <!-- Recordar -->
            <div class="checkbox-group">
                <input type="checkbox" id="recordar" name="recordar"/>
                <label for="recordar">Recordar durante los próximos 7 días</label>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" class="btn-submit">Iniciar sesión</button>
        </form>
    </main>

</body>
</html>