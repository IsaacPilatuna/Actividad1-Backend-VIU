<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Agregar Plataforma</h1>
            </div>
            <div class="card-body form-container">
                <form id="form" action="/Controllers/Plataforma/Agregar.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
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