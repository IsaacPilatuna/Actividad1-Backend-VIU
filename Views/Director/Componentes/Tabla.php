
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
      $query = "SELECT * FROM Director";
      $results = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($results)){ ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['apellidos']; ?></td>
          <td><?php echo $row['fechaNacimiento']; ?></td>
          <td><?php echo $row['nacionalidad']; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Director/Eliminar.php?id=<?= $row['id'];?>"> <i class="bi-trash"></i> Eliminar</a> 
            <a class="btn btn-primary" href="./Componentes/Editar.php?id=<?= $row['id'];?>"> <i class="bi-pencil"></i> Editar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>