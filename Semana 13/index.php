<?php
    require('variablesBD.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera aplicación con Mysql</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect($host, $usuario, $pass, $base);
        if ($conexion){
            echo 'Logre conectar';
            $consulta = 'SELECT * FROM peliculas.actores';
            $datos = mysqli_query($conexion,$consulta);
            while ($linea = mysqli_fetch_array($datos)){
                ?>
                <p>id  = <?= $linea['idactores']?>  
                    nombre actor = <?= $linea['nombre']?> 
                    edad = <?= $linea['edad']?> 
                </p>
                <?php
            }

        }else{
            echo 'No me pude contectar';
        }
    ?>
</body>
</html>