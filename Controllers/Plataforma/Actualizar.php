<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $query = "UPDATE plataforma SET nombre='$nombre' WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    header("Location: /Views/Plataforma/Plataforma.php")
?>