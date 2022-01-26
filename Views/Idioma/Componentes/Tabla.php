<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Código ISO</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include($_SERVER['DOCUMENT_ROOT']."/Controllers/Idioma/Lista.php");
      foreach($idiomas as $idioma){ ?>
        <tr>
          <td><?php echo $idioma->id; ?></td>
          <td><?php echo $idioma->nombre; ?></td>
          <td><?php echo $idioma->codigoISO; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Idioma/Eliminar.php?id=<?= $idioma->id;?>"> <i class="bi-trash"></i> Eliminar</a> 
            <a class="btn btn-primary" href="./Componentes/Editar.php?id=<?= $idioma->id;?>"> <i class="bi-pencil"></i> Editar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>