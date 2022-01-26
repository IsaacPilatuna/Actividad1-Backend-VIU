<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $nacionalidad = $_POST['nacionalidad'];
    $query = "UPDATE actor SET nombre='$nombre', apellidos='$apellidos', fechaNacimiento='$fechaNacimiento', nacionalidad='$nacionalidad' WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Actor/Actor.php")
?>