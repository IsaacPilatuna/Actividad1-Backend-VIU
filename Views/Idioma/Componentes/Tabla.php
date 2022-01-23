
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo ISO</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query = "SELECT * FROM Idioma";
      $results = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($results)){ ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['codigoISO']; ?></td>
        </tr>
      <?php } ?>
  </tbody>
</table>