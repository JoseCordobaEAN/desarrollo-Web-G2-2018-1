
<?php
    include('constantes.php');
    require('header.php');
?>

<h2>Hola mundo</h2>

<h2>
    <?php
        $mensaje = 'La suma de mis numeros es ';
        $numero_1 = 10;
        $numero_2 = 20;
        echo $mensaje.($numero_1+$numero_2); ?>
</h2>


<?php
    require('footer.php');
?>
