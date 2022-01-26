<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include($_SERVER['DOCUMENT_ROOT']."/Controllers/Plataforma/Lista.php");
      foreach($plataformas as $plataforma){ ?>
        <tr>
          <td><?php echo $plataforma->id; ?></td>
          <td><?php echo $plataforma->nombre; ?></td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Plataforma/Eliminar.php?id=<?= $plataforma->id;?>"> <i class="bi-trash"></i> Eliminar</a> 
            <a class="btn btn-primary" href="./Componentes/Editar.php?id=<?= $plataforma->id;?>"> <i class="bi-pencil"></i> Editar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>