<?php
    include('validar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Uso de cookies</title>
</head>

<body>
    <div class="cookie">
        <?php echo $nombre; ?>
    </div>

    <form action="index.php" method="get">
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>
