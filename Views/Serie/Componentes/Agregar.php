<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Agregar Serie</h1>
            </div>
            <div class="card-body form-container">
                <form id="form" action="/Controllers/Serie/Agregar.php" method="POST">

                    <div class="form-group">
                        <label for="nombre">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
                    </div>

                    <div class="form-group">
                        <label for="plataforma">Plataforma</label>
                        <select class="form-select" aria-label="Director" id="plataforma" name="plataforma" required>
                            <option disabled selected value> -- Seleccionar Plataforma -- </option>
                            <?php 
                            $query = "SELECT * FROM plataforma";
                            $results = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($results)){ ?>
                                <option value="<?= $row['id'] ?>"> <?php echo $row['nombre']?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label for="director">Director</label>
                        <select class="form-select" aria-label="director" id="director" name="director" required>
                            <option disabled selected value> -- Seleccionar Director -- </option>
                            <?php 
                            $query = "SELECT * FROM director";
                            $results = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($results)){ ?>
                                <option value="<?= $row['id'] ?>"> <?php echo $row['nombre'].' '.$row['apellidos'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="actores">Actores</label>
                        <select class="form-select" aria-label="actores" multiple="multiple" id="actores" name="actores[]" required>
                            <?php 
                            $query = "SELECT * FROM actor";
                            $results = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($results)){ ?>
                                <option value="<?= $row['id'] ?>"> <?php echo $row['nombre'].' '.$row['apellidos'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="audios">Idiomas Audio</label>
                        <select class="form-select" aria-label="audios" multiple="multiple" id="audios" name="audios[]" required>
                            <?php 
                            $query = "SELECT * FROM idioma";
                            $results = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($results)){ ?>
                                <option value="<?= $row['id'] ?>"> <?php echo $row['codigoISO'].' - '.$row['nombre'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subtitulos">Idiomas Subtitulos</label>
                        <select class="form-select" aria-label="subtitulos" multiple="multiple" id="subtitulos" name="subtitulos[]" required>
                            <?php 
                            $query = "SELECT * FROM idioma";
                            $results = mysqli_query($conexion, $query);
                            while($row = mysqli_fetch_array($results)){ ?>
                                <option value="<?= $row['id'] ?>"> <?php echo $row['codigoISO'].' - '.$row['nombre'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                </form>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success" form="form" value="agregar">
                    <i class="bi-plus-circle"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</div>