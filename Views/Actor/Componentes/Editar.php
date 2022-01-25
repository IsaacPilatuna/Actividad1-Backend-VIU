
<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Actor</h1>
            </div>
            <div class="card-body form-container">
                <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM Actor WHERE id=$id";
                    $results = mysqli_query($conexion, $query);
                    $actor = mysqli_fetch_object($results);
                ?>
                <form id="form" action="/Controllers/Actor/Actualizar.php" method="POST">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Id" required readonly value="<?= $actor->id ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="<?= $actor->nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required value="<?= $actor->apellidos ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento" required value="<?= $actor->fechaNacimiento ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required value="<?= $actor->nacionalidad ?>">
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