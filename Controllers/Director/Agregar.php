<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $nacionalidad = $_POST['nacionalidad'];
    $query = "INSERT INTO director(nombre, apellidos, fechaNacimiento, nacionalidad) VALUES ('$nombre','$apellidos','$fechaNacimiento','$nacionalidad')";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Director/Director.php")
?>