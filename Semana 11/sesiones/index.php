<?php
    // Iniciamos nuestra sesion
    session_start();

    // Si contamos con un nombre lo asignamos, si no notificamos
    $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'No identificado';

    //Validamos si recibimos el nombre
    if (isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $_SESSION['nombre'] = $_POST['nombre'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesiones</title>
</head>
<body>

    <h2>Hola sesion <?= session_id();?>, gracias</h2>
    <div id="menasje">
        El usuario es: <?= $nombre?>
    </div>
    
    <div class="frm-nombre">
        <form action="index.php" method="post">
            <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">
            <input type="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>