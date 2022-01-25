<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Director</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query = "SELECT * FROM Serie AS s JOIN (SELECT id AS 'idPlataforma', nombre AS 'plataforma' FROM Plataforma) AS p ON s.idPlataforma = p.idPlataforma JOIN (SELECT id AS 'idDirector', CONCAT_WS(', ', nombre, apellidos) AS 'director' from Director) AS d ON s.idDirector = d.idDirector;";
      $results = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($results)){ ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['titulo']; ?></td>
          <td><?php echo $row['plataforma']; ?></td>
          <td><?php echo $row['director']; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Serie/Eliminar.php?id=<?= $row['id'];?>"> <i class="bi-trash"></i> Eliminar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>