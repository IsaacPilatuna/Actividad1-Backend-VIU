<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Agregar Director</h1>
            </div>
            <div class="card-body form-container">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" placeholder="Nacionalidad" required>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success">
                    <i class="bi-plus-circle"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</div>