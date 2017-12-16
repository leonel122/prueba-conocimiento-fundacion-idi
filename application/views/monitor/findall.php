<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <h1 class="d-flex justify-content-center">Todos los Monitores</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Programa A</th>
            <th scope="col">Semestre</th>
            <th scope="col">Identificación</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (json_decode($result) as $key => $value):?>
          <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value->firsts_names;?></td>
              <td><?= $value->last_name;?></td>
              <td><?= $value->academic_program;?></td>
              <td><?= $value->semester;?></td>
              <td><?= $value->identification_card;?></td>
              <td><?= $value->email;?></td>
              <td><?= $value->phone;?></td>
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
