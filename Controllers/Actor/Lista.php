<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    include($_SERVER['DOCUMENT_ROOT']."/Models/Actor.php");
    $actores = [];
    $query = "SELECT * FROM actor;";
    $resultado = mysqli_query($conexion, $query);
    while($row = mysqli_fetch_array($resultado)){ 
      $actores[] = new Actor($row);
    }
    mysqli_close($conexion);
?>