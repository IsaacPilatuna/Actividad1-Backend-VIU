<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_GET['id'];
    $query = "DELETE FROM actorSerie WHERE idSerie=$id";
    $resultado = mysqli_query($conexion, $query);
    $query = "DELETE FROM idiomaSerie WHERE idSerie=$id";
    $resultado = mysqli_query($conexion, $query);
    $query = "DELETE FROM serie WHERE id=$id"; 
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Serie/Serie.php")
?>