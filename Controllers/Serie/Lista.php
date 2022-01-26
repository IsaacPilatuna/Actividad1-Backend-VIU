<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    include($_SERVER['DOCUMENT_ROOT']."/Models/Serie.php");
    $series = [];
    $query = "SELECT * FROM Serie AS s JOIN (SELECT id AS 'idPlataforma', nombre AS 'plataforma' FROM Plataforma) AS p ON s.idPlataforma = p.idPlataforma JOIN (SELECT id AS 'idDirector', CONCAT_WS(', ', nombre, apellidos) AS 'director' from Director) AS d ON s.idDirector = d.idDirector;";
    $resultado = mysqli_query($conexion, $query);
    while($row = mysqli_fetch_array($resultado)){ 
      $series[] = new Serie($row);
    }
    mysqli_close($conexion);


    function getActoresSerie($idSerie){
      include($_SERVER['DOCUMENT_ROOT']."/db.php");
      include_once($_SERVER['DOCUMENT_ROOT']."/Models/Actor.php");
      $actores = [];
      $query = "SELECT * FROM actorSerie JOIN actor ON actorSerie.idActor = actor.id WHERE idSerie=".$idSerie;
      $resultado = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($resultado)){ 
        $actores[] = new Actor($row);
      }
      mysqli_close($conexion);
      return $actores;
    }

    function getIdiomasSerie($idSerie){
      include($_SERVER['DOCUMENT_ROOT']."/db.php");
      include_once($_SERVER['DOCUMENT_ROOT']."/Models/Idioma.php");
      $idiomas = [];
      $query = "SELECT * FROM idiomaSerie JOIN idioma ON idiomaSerie.idIdioma = idioma.id WHERE idSerie=".$idSerie;
      $resultado = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($resultado)){ 
        $idiomas[] = new Idioma($row);
      }
      mysqli_close($conexion);
      return $idiomas;
    }
?>