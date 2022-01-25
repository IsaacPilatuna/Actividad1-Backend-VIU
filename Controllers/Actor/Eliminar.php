<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $id = $_GET['id'];
    $query = "DELETE FROM actor WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    header("Location: /Views/Actor/Actor.php")
?>