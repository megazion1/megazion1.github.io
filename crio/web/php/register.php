<?php

    require 'conection.php';

    $usuario = $_POST['user'];
    $pass = $_POST['password'];
    $name = $_POST['name'];

    $sql = "INSERT INTO users VALUES ('', '$usuario', '$pass', '$name');";
    $insert = mysqli_query($con, $sql);
    // $array = mysqli_fetch_array($consulta);

    if ($insert) {
        # code...
        // $_SESSION['username'] = $usuario; 
        // header("location: ../sgc.php");
        echo "Usuario registrado";
        echo '<a href="../login.html">Ingresar</a>';
    } else {
        echo "Error al registrar <br>";
        echo '<a href="../login.html">Volver a ingresar</a>';
    }

    mysqli_close($con);

?>