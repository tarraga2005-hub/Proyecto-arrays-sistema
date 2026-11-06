<?php
    require 'control_sesion.php';
?>
<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); 
    }
    if(isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_FILES['archivo'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreTemporal = $_FILES['archivo']['tmp_name'];

        $destino = "archivos/";
        if (!file_exists($destino)) {
            mkdir($destino, 0777, true);
        }

        $ruta = $destino . $nombreArchivo;
        if(move_uploaded_file($nombreTemporal, $ruta)) {
            $_SESSION['titulo'][] = $titulo;
            $_SESSION['descripcion'][] = $descripcion;
            $_SESSION['archivos'][] = $ruta;
            header("Location: bienvenida.php");
            exit();
        }else {
            echo("<h2> Se ha producido un error lo sentimos</h2>");
        }
    }
?>