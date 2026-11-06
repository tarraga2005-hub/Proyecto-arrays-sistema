<?php
    session_start();
    $carpeta = 'archivos/';
    if (file_exists($carpeta)) {
       $archivos = glob($carpeta . '*'); //Dentro del glob se indica el patron de busqueda y me devuelve un array con ese patrón
        foreach ($archivos as $archivo) {
            if (is_file($archivo)) {
                unlink($archivo); 
            }
        }
    }
    session_destroy();
    header("Location: Acceso.php");
    exit();
?>