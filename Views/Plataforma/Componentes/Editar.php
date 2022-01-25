<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Editar Plataforma</h1>
            </div>
            <div class="card-body form-container">
                <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM Plataforma WHERE id=$id";
                    $results = mysqli_query($conexion, $query);
                    $plataforma = mysqli_fetch_object($results);
                ?>
                <form id="form" action="/Controllers/Plataforma/Actualizar.php" method="POST">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Id" required readonly value="<?= $plataforma->id ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required value="<?= $plataforma->nombre?>">
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