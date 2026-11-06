<?php

require 'control_sesion.php';


$tieneArchivos = isset($_SESSION['archivos']) && count($_SESSION['archivos']) > 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Prácticas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        .contenedor {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .tarjeta-archivo {
            border: 1px solid #ddd;
            border-left: 5px solid #007bff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 4px;
            background-color: #fafafa;
        }
        .tarjeta-archivo h3 {
            margin-top: 0;
            color: #333;
        }
        .btn-descargar {
            display: inline-block;
            padding: 8px 12px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
        .btn-descargar:hover {
            background-color: #218838;
        }
        .mensaje-vacio {
            padding: 15px;
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
            border-radius: 4px;
        }
        .navegacion {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <!-- Saludo al usuario usando la variable de sesión -->
        <h1>¡Hola, <?php echo isset($_SESSION['nombre']) ? htmlspecialchars($_SESSION['nombre']) : 'usuario'; ?>!</h1>
        <h2>Tus prácticas subidas</h2>

        <?php if ($tieneArchivos): ?>
            
            <div class="lista-archivos">
                <?php 
                $total = count($_SESSION['archivos']);
                for ($i = 0; $i < $total; $i++): 
                    $titulo = htmlspecialchars($_SESSION['titulo'][$i]);
                    $descripcion = htmlspecialchars($_SESSION['descripcion'][$i]);
                    $ruta = $_SESSION['archivos'][$i];
                    $nombreFichero = basename($ruta);//Para que nos devuelva  el nombre del archivo sin la ruta
                ?>
                    <div class="tarjeta-archivo">
                        <h3><?php echo $titulo; ?></h3>
                        <p><strong>Descripción:</strong> <?php echo $descripcion; ?></p>
                        <a href="<?php echo $ruta; ?>" download class="btn-descargar">
                            Descargar archivo (<?php echo $nombreFichero; ?>)
                        </a>
                    </div>
                <?php endfor; ?>
            </div>

        <?php else: ?>

            <div class="mensaje-vacio">
                <p>Lo sentimos, aún no tienes archivos subidos.</p>
            </div>

        <?php endif; ?>

        <div class="navegacion">
            <a href="bienvenida.php">Volver al panel principal</a> | 
            <a href="subirPractica.php">Subir otra práctica</a> | 
            <a href="cerrar.php">Cerrar sesión</a>
        </div>
    </div>

</body>
</html>