<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    include($_SERVER['DOCUMENT_ROOT']."/Models/Idioma.php");
    $idiomas = [];
    $query = "SELECT * FROM idioma;";
    $resultado = mysqli_query($conexion, $query);
    while($row = mysqli_fetch_array($resultado)){ 
      $idiomas[] = new Idioma($row);
    }
    mysqli_close($conexion);
?>