<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <h1 class="d-flex justify-content-center">Todos los Monitores</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Monitor</th>
            <th scope="col">Materia</th>
            <th scope="col">Fecha</th>
            <th scope="col">Salon</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (json_decode($result) as $key => $value):?>
          <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value->id_monitor;?></td>
              <td><?= $value->matter;?></td>
              <td><?= $value->date;?></td>
              <td><?= $value->lounge;?></td>
              <td><a class="btn btn-info" href="find/<?= $value->id;?>" >Ver</a> <a class="btn btn-warning" href="edit/<?= $value->id;?>" >Editar</a></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
  <?= $script ?>
</body>
</html>
