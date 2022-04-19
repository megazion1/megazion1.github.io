<?php

    require 'conection.php';
    session_start();

    $usuario = $_POST['user'];
    $pass = $_POST['password'];

    $sql = "SELECT COUNT(*) AS contar FROM users WHERE user = '$usuario' AND password = '$pass'";
    $consulta = mysqli_query($con, $sql);
    $array = mysqli_fetch_array($consulta);

    if ($array['contar'] > 0) {
        # code...
        $_SESSION['username'] = $usuario; 
        header("location: ../sgc.php");
    } else {
        echo "Datos Incorrectos <br>";
        echo '<a href="../login.html">Volver a ingresar</a>';
    }

?>
