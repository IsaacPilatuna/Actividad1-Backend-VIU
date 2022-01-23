
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Nacionalidad</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query = "SELECT * FROM Actor";
      $results = mysqli_query($conexion, $query);
      while($actor = mysqli_fetch_array($results)){ ?>
        <tr>
          <td><?php echo $actor['id']; ?></td>
          <td><?php echo $actor['nombre']; ?></td>
          <td><?php echo $actor['apellidos']; ?></td>
          <td><?php echo $actor['fechaNacimiento']; ?></td>
          <td><?php echo $actor['nacionalidad']; ?></td>
        </tr>
      <?php } ?>
  </tbody>
</table>