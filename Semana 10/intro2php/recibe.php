<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recibe el formulario</title>
</head>

<body>
    <?php
        if (isset($_POST['nombre'], $_POST['pass'])){
            echo 'Tu nombre es '.$_POST['nombre'];
            echo '<p>Tu clave es '.$_POST['pass'];
        }else{
            echo 'Ingrese a la app en     <a href="formulario.php"> este enlace</a>';
        }
    ?>
</body>

</html>
