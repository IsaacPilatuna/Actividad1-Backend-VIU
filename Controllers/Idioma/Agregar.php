<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $nombre = $_POST['nombre'];
    $codigoISO = $_POST['codigoISO'];
    $query = "INSERT INTO idioma(nombre, codigoISO) VALUES ('$nombre','$codigoISO')";
    $resultado = mysqli_query($conexion, $query);
    header("Location: /Views/Idioma/Idioma.php")
?>