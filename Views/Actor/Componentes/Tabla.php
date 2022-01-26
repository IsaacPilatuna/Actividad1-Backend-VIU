
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
      include($_SERVER['DOCUMENT_ROOT']."/Controllers/Actor/Lista.php");
      foreach($actores as $actor){ ?>
        <tr>
          <td><?php echo $actor->id; ?></td>
          <td><?php echo $actor->nombre; ?></td>
          <td><?php echo $actor->apellidos; ?></td>
          <td><?php echo $actor->fechaNacimiento ?></td>
          <td><?php echo $actor->nacionalidad; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Actor/Eliminar.php?id=<?= $actor->id;?>"> <i class="bi-trash"></i> Eliminar</a> 
            <a class="btn btn-primary" href="./Componentes/Editar.php?id=<?= $actor->id;?>"> <i class="bi-pencil"></i> Editar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>