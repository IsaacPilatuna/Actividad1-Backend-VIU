<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    include($_SERVER['DOCUMENT_ROOT']."/Models/Plataforma.php");
    $plataformas = [];
    $query = "SELECT * FROM plataforma;";
    $resultado = mysqli_query($conexion, $query);
    while($row = mysqli_fetch_array($resultado)){ 
      $plataformas[] = new Plataforma($row);
    }
    mysqli_close($conexion);
?>