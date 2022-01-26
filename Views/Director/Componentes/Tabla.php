
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Nacionalidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include($_SERVER['DOCUMENT_ROOT']."/Controllers/Director/Lista.php");
      foreach($directores as $director){ ?>
        <tr>
          <td><?php echo $director->id; ?></td>
          <td><?php echo $director->nombre; ?></td>
          <td><?php echo $director->apellidos; ?></td>
          <td><?php echo $director->fechaNacimiento ?></td>
          <td><?php echo $director->nacionalidad; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Director/Eliminar.php?id=<?= $director->id;?>"> <i class="bi-trash"></i> Eliminar</a> 
            <a class="btn btn-primary" href="./Componentes/Editar.php?id=<?= $director->id;?>"> <i class="bi-pencil"></i> Editar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>