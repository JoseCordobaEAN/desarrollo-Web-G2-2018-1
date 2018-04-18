<?php
    if (isset($_GET['nombre'])){
        setcookie('nombre', $_GET['nombre']);
        $nombre = 'Hola '.$_GET['nombre'].'. Este dato viene de Get';
    }else if(isset($_COOKIE['nombre'])){
        $nombre = "Hola ".$_COOKIE['nombre'].'. Este dato viene de &#127850;';
    }else {
        $nombre = 'Dime tu nombre';
    }
?>