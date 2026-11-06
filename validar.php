<?php
    //Trabajando con modulos es aconsejable hacer comprobacion siempre
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); 
    }

    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $recordar = $_POST['recordar'];

    $_SESSION['nombre'] = $nombre;
    $_SESSION['inicio_sesion'] = time();
    $_SESSION['constrasena'] = $contrasena;
    $_SESSION['archivos'] = [];
    $_SESSION['titulo'] = [];
    $_SESSION['desccripcion'] = [];


    if(strlen($contrasena) === 8) {
        if($recordar) {
            setcookie("nombreUsuario", $nombre, time() + 7*24*60*60);
            setcookie("contrasenaUsuario", $contrasena, time() + 7*24*60*60);
        }else{
            setcookie("nombreUsuario", "", time() - 3600);
            setcookie("contrasenaUsuario", "", time() - 3600);
        }
        header("Location: bienvenida.php");
        exit();
    }else {
        echo("La contrasena no es de 8 digitos");
    }
?>