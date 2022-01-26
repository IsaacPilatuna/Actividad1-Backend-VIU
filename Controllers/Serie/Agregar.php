<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php");
    $titulo = $_POST['titulo'];
    $plataforma = $_POST['plataforma'];
    $director = $_POST['director'];
    $actores = $_POST['actores'];
    $audios = $_POST['audios'];
    $subtitulos = $_POST['subtitulos'];

    $query = "INSERT INTO serie(titulo, idPlataforma, idDirector) VALUES ('$titulo','$plataforma','$director')";
    $resultado = mysqli_query($conexion, $query);

    $idSerie = mysqli_insert_id($conexion);

    foreach($actores as $actor){
        $query = "INSERT INTO actorSerie(idSerie, idActor) VALUES ($idSerie, $actor)";
        $resultado = mysqli_query($conexion, $query);
    }

    foreach($audios as $audio){
        $query = "INSERT INTO idiomaSerie(idSerie, idIdioma, tipo) VALUES ($idSerie, $audio, 'Audio')";
        $resultado = mysqli_query($conexion, $query);
    }

    foreach($subtitulos as $subtitulo){
        $query = "INSERT INTO idiomaSerie(idSerie, idIdioma, tipo) VALUES ($idSerie, $subtitulo, 'Subtítulos')";
        $resultado = mysqli_query($conexion, $query);
    }
    mysqli_close($conexion);
    header("Location: /Views/Serie/Serie.php");
?>