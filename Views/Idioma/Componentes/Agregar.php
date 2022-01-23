<div class="module">
<?php include("../../../navbar.php")?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Agregar Idioma</h1>
            </div>
            <div class="card-body form-container">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Código ISO</label>
                        <input type="text" class="form-control" id="codigoISO" placeholder="Código ISO" required>
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