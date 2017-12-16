<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <?php $result = json_decode($result);?>
      <h1 class="d-flex justify-content-center">Monitor <?= $result->firsts_names ." ". $result->last_name?></h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Programa</th>
            <th scope="col">Semestre</th>
            <th scope="col">Identificación</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $result->firsts_names?></td>
            <td><?= $result->last_name?></td>
            <td><?= $result->academic_program?></td>
            <td><?= $result->semester?></td>
            <td><?= $result->identification_card?></td>
            <td><?= $result->email?></td>
            <td><?= $result->phone?></td>
            <td> <a class="btn btn-danger" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitor/delete/<?= $result->id;?>" >Eliminar</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?= $script ?>
</body>
</html>
