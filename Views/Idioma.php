<?php include("../navbar.php")?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
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
        </tr>
      <?php } ?>
  </tbody>
</table>