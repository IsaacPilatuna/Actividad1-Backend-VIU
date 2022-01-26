<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    include($_SERVER['DOCUMENT_ROOT']."/Models/Director.php");
    $directores = [];
    $query = "SELECT * FROM director;";
    $resultado = mysqli_query($conexion, $query);
    while($row = mysqli_fetch_array($resultado)){ 
      $directores[] = new Director($row);
    }
    mysqli_close($conexion);
?>