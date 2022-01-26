<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_GET['id'];
    $query = "DELETE FROM idioma WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: /Views/Idioma/Idioma.php")
?>