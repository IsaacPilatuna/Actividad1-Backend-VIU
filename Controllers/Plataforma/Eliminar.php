<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_GET['id'];
    $query = "DELETE FROM plataforma WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    header("Location: /Views/Plataforma/Plataforma.php")
?>