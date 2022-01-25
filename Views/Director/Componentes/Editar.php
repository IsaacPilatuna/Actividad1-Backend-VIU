
<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Director</h1>
            </div>
            <div class="card-body form-container">
                <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM Director WHERE id=$id";
                    $results = mysqli_query($conexion, $query);
                    $director = mysqli_fetch_object($results);
                ?>
                <form id="form" action="/Controllers/Director/Actualizar.php" method="POST">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Id" required readonly value="<?= $director->id ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="<?= $director->nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required value="<?= $director->apellidos ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento" required value="<?= $director->fechaNacimiento ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required value="<?= $director->nacionalidad ?>">
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success" form="form" value="actualizar">
                    <i class="bi-plus-circle"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</div>