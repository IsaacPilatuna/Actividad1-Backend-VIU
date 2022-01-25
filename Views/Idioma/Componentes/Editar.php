<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Idioma</h1>
            </div>
            <div class="card-body form-container">
                <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM Idioma WHERE id=$id";
                    $results = mysqli_query($conexion, $query);
                    $idioma = mysqli_fetch_object($results);
                ?>
                <form id="form" action="/Controllers/Idioma/Actualizar.php" method="POST">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Id" required readonly value="<?= $idioma->id ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="<?= $idioma->nombre?>">
                    </div>
                    <div class="form-group">
                        <label for="codigoISO">Código ISO</label>
                        <input type="text" class="form-control" id="codigoISO" name="codigoISO" placeholder="Código ISO" required value="<?= $idioma->codigoISO?>">
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