<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $codigoISO = $_POST['codigoISO'];
    $query = "UPDATE idioma SET nombre='$nombre', codigoISO='$codigoISO' WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Idioma/Idioma.php")
?>