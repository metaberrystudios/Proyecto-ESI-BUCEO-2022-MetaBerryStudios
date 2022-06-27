<?php
    require_once 'Controlador.php';
    $c = new Controlador();
    $c->altaUsuario($_POST['nombre'],$_POST['contraseña']);
    header('Location: vista.html.php');
?>