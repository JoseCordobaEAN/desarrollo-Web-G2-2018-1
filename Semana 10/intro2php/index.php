<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>intro php</title>
</head>

<body>
    <div id="horaservidor">
        <?php if (true){ ?>

        <p>hola mundo</p>

        <?php }
        echo '<p> La hora del servidor es '.date('h:i:s').'</p>';
    ?>
    </div>

    <div id="horacliente"></div>

    <script src="js/main.js"></script>
</body>

</html>
