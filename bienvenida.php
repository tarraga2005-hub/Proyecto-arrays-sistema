<?php
    require 'control_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #7DD3FC;
            color: #000000;
        }

        /* Cabecera */
        header {
            background-color: #ffffff;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            text-decoration: none;
            color: #333333;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #0284C7;
        }

        
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Tarjeta del menú */
        .menu-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        /* Botones del menú */
        .btn-menu {
            display: block;
            width: 100%;
            padding: 13px 15px;
            background-color: #0284C7;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
        }

        .btn-menu:hover {
            background-color: #0369A1;
            transform: translateY(-2px);
        }

        /* Pie de página */
        footer {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #E5E7EB;
        }

        footer p {
            font-size: 13px;
            color: #555555;
        }

        /* Adaptación a móviles */
        @media (max-width: 500px) {
            header {
                padding: 18px 20px;
            }

            nav {
                gap: 15px;
            }

            nav a {
                font-size: 12px;
            }

            .logo {
                font-size: 18px;
            }

            h1 {
                font-size: 24px;
            }

            .menu-container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">Mi Sistema</div>

        <nav>
            <a href="consultar.php">Mi perfil</a>
        </nav>
    </header>


    <main>
        <h1>Bienvenido</h1>

        <div class="menu-container">
            <a href="subirPractica.php" class="btn-menu">Subir un archivo</a>

            <a href="consultar.php" class="btn-menu">Consultar archivos</a>

            <a href="cerrar.php" class="btn-menu">Cerrar sesión</a>
        </div>
    </main>


    <footer>
        <p>Licencias de uso</p>
    </footer>

</body>
</html>
