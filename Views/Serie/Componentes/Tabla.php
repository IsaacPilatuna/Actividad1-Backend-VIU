<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Director</th>
      <th scope="col">Actores</th>
      <th scope="col">Idiomas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include($_SERVER['DOCUMENT_ROOT']."/Controllers/Serie/Lista.php");
      foreach($series as $serie){ ?>
        <tr>
          <td><?php echo $serie->id; ?></td>
          <td><?php echo $serie->titulo; ?></td>
          <td><?php echo $serie->plataforma; ?></td>
          <td><?php echo $serie->director; ?></td>
          <td>
            <ul>
            <?php foreach(getActoresSerie($serie->id) as $actor){ ?>
              <li><?php echo $actor->nombre.' '.$actor->apellidos; ?> </li>
            <?php } ?>
            </ul>
          </td>
          <td>
            <ul>
            <?php foreach(getIdiomasSerie($serie->id) as $idioma){ ?>
              <li><?php echo $idioma->nombre.'- '.$idioma->codigoISO.' - '.$idioma->tipo; ?> </li>
            <?php } ?>
            </ul>
          </td>
          <td class="buttons-container"> 
            <a class="btn btn-danger" href="/Controllers/Serie/Eliminar.php?id=<?= $serie->id;?>"> <i class="bi-trash"></i> Eliminar</a> 
           </td>
        </tr>
      <?php } ?>
  </tbody>
</table>