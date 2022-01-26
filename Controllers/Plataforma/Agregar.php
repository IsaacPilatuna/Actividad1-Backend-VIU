<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $nombre = $_POST['nombre'];
    $query = "INSERT INTO plataforma(nombre) VALUES ('$nombre')";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Plataforma/Plataforma.php")
?>