<?php
    //Código elaborado con ayuda de ia para eliminar los archivos y no sobrecargar el servidor

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $limiteAbsoluto = 7200; 

    if (isset($_SESSION['inicio_sesion'])) {
        $horaExpiracion = $_SESSION['inicio_sesion'] + 7200;

        // Si han pasado 2 horas o más desde que inició sesión
        if (time() >= $horaExpiracion) {
            
            // 1. Borrar todos los archivos de la carpeta
            $carpeta = 'archivos/';
            if (file_exists($carpeta)) {
                foreach (glob($carpeta . '*') as $archivo) {
                    if (is_file($archivo)) {
                        unlink($archivo);
                    }
                }
            }

            // 2. Vaciar y destruir la sesión
            $_SESSION = array();
            session_destroy();

            // 3. Redirigir al login
            header("Location: acceso.php");
            exit();
        }
    }
?>