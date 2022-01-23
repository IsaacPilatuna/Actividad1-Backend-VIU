<?php include("../navbar.php")?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query = "SELECT * FROM Serie";
      $results = mysqli_query($conexion, $query);
      while($row = mysqli_fetch_array($results)){ ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['titulo']; ?></td>
        </tr>
      <?php } ?>
  </tbody>
</table>