<?php
    session_start();
    if(isset($_GET['lang'])){
        $_SESSION['lang'] = $_GET['lang']; 
    }

    if(isset($_SESSION['lang'])){
        include('lang/'.$_SESSION['lang'].'.php');    
    }else{
        include('lang/es.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
</head>
<body>
    <header><?= $titulo ?></header>
    <div class="main">
        <?= $principal ?>
    </div>
    <aside>
        <div class="lang">
            <form action="index.php">
                <select name="lang" id="lang">
                    <option value="es">Español</option>
                    <option value="en">English</option>
                    <option value="jp">日本</option>
                </select>
                <input type="submit" value="Cambiar idioma">
            </form>
        </div>
        <?= $lateral ?>
    </aside>
    <footer> <?= $pie ?> </footer>
</body>
</html>