<?php
    require 'control_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Práctica</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #7DD3FC;
            color: #333333;
        }

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
            color: #0284c7;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .form-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: left;
            color: #000;
        }

        .input-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #0284c7;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-submit:hover {
            background-color: #0369a1;
        }

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
    </style>
</head>
<body>

    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="#">Mi perfil</a>
        </nav>
    </header>

    <main>
        <div class="form-card">
            <h1>Subir práctica:</h1>
            
            <form action="guardarPractica.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required />
                </div>

                <div class="input-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>

                <div class="input-group">
                    <label for="archivo">Seleccionar archivo:</label>
                    <input type="file" id="archivo" name="archivo" required />
                </div>

                <button type="submit" class="btn-submit">Subir</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Licencias de uso</p>
    </footer>

</body>
</html>