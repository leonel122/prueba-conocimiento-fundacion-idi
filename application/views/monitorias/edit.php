<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <?php $result = json_decode($result);?>
      <h1 class="d-flex justify-content-center">Editar</h1>
      <form id="form" method="post" action="../update">
        <div class="form-group" style="display:none;">
          <label for="">id</label>
          <input type="text" class="form-control" name="id" placeholder="" value="<?= $result->id?>">
        </div>
        <div class="form-group">
          <label for="">Nombres</label>
          <input type="text" class="form-control" name="id" placeholder="Ingrese Nombres" value="<?= $result->id?>" required>
        </div>
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" name="matter" placeholder="Ingrese Apellidos" value="<?= $result->matter?>"required>
        </div>
        <div class="form-group">
          <label for="">Programa Academico</label>
          <input type="text" class="form-control" name="date" placeholder="Ingrese Programa Academico" value="<?= $result->date?>" required>
        </div>
        <div class="form-group">
          <label for="">Semestre</label>
          <input type="text" class="form-control" name="lounge" placeholder="Ingrese Semestre" value="<?= $result->lounge?>" required>
        </div>
        <input type="submit" id="btn-send" class="btn btn-primary" value="Editar">
      </form>
    </div>
  </div>
  <?= $script ?>
</body>
</html>
