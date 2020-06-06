<?php
    require_once("CV.php");

    $cv = new cv($_POST['textname'], $_POST['textlastname'], $_POST['textdni']);

    $cv->setTitulo($_POST['texttitulo']);
    $cv->setCelular($_POST['texttel']);
    $cv->setCorreo($_POST['textemail']);
    $cv->setLinked($_POST['textlinked']);
    $cv->setPerfilPro($_POST['textpro']);
    $cv->setExpLab1($_POST['textexp1cargo'], $_POST['textexp1lugar'], $_POST['textexp1inicio'], $_POST['textexp1final']);
    $cv->setExpLab2($_POST['textexp2cargo'], $_POST['textexp2lugar'], $_POST['textexp2inicio'], $_POST['textexp2final']);
?>


<!DOCTYPE html>

<html>
    <head>
        <title>CV 2020</title>
        <style>
        h1 {text-align: center;}
        </style>
    </head>
    <!-- cuerpo de laa página -->
    <body>
        <!-- encabezado de la página -->
        <h1><?php echo $cv->getNombres(),' ',$cv->getApellidos(); ?></h1>
        <br>
        <p>
            <label><?php echo $cv->getTitulo(); ?></label>
            <br>
            <label><?php echo $cv->getDni(),' | +56 9 ',$cv->getCelular(),' | ',$cv->getCorreo(); ?></label>
            <br>
            <?php $perLinked = $cv->getLinked(); ?>
            <?php echo '<a href="'.$perLinked.'"'.' target="_blank"><u>Perfil de LinkedIn</u></a>' ?>
            <hr>
            <h2>PERFIL PROFESIONAL</h2>
            <br>
            <?php echo $cv->getPerfilPro(); ?>
            <br>
            <br>
            <hr>
            <h2>EXPERIENCIA PROFESIONAL</h2>
            <p><?php echo $cv->getExpLabol1(); ?></p>
            <p><?php echo $cv->getExpLabol2(); ?></p>
        </p>
    </body>
</html>