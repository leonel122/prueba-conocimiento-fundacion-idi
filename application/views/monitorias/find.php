<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <?php $result = json_decode($result);?>
      <h1 class="d-flex justify-content-center">Monitoria</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id monitor</th>
            <th scope="col">Materia</th>
            <th scope="col">Fecha</th>
            <th scope="col">Salón</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $result->id_monitor?></td>
            <td><?= $result->matter?></td>
            <td><?= $result->date?></td>
            <td><?= $result->lounge?></td>
            <td> <a class="btn btn-danger" href="http://127.0.0.1/php/fundacionidi/Index.php/Monitoria/delete/<?= $result->id;?>" >Eliminar</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?= $script ?>
</body>
</html>
