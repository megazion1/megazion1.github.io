<?php

    session_start();
    $usuario = $_SESSION['username'];

    if (!isset($usuario)) {
        # code...
        header("location: login.html");
    } else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestion de Calidad CRIO</title>
</head>
<body>
    <h1>
        <?php
            echo "BIENVENIDO $usuario";
        ?>
    </h1>

    <a href="php/exit.php">
        <?php
            echo "CERRAR SESION";
    }
        ?>
    </a>
    
</body>
</html>