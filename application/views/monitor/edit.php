<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <?php $result = json_decode($result);?>
      <h1 class="d-flex justify-content-center">Editar <?= $result->firsts_names ." ". $result->last_name?></h1>
      <form id="form" method="post" action="../update">
        <div class="form-group" style="display:none;">
          <label for="">id</label>
          <input type="text" class="form-control" name="id" placeholder="" value="<?= $result->id?>">
        </div>
        <div class="form-group">
          <label for="">Nombres</label>
          <input type="text" class="form-control" name="firsts_names" placeholder="Ingrese Nombres" value="<?= $result->firsts_names?>" required>
        </div>
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" name="last_name" placeholder="Ingrese Apellidos" value="<?= $result->last_name?>"required>
        </div>
        <div class="form-group">
          <label for="">Programa Academico</label>
          <input type="text" class="form-control" name="academic_program" placeholder="Ingrese Programa Academico" value="<?= $result->academic_program?>" required>
        </div>
        <div class="form-group">
          <label for="">Semestre</label>
          <input type="text" class="form-control" name="semester" placeholder="Ingrese Semestre" value="<?= $result->semester?>" required>
        </div>
        <div class="form-group">
          <label for="">Identificación</label>
          <input type="text" class="form-control" name="identification_card" placeholder="Ingrese identificación" value="<?= $result->identification_card?>" required>
        </div>
        <div class="form-group">
          <label for="">Correo</label>
          <input type="email" class="form-control" name="email" placeholder="Ingrese Correo" value="<?= $result->email?>" required>
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" class="form-control" name="phone" placeholder="Ingrese Telefono" value="<?= $result->phone?>" required>
        </div>
        <input type="submit" id="btn-send" class="btn btn-primary" value="Editar">
      </form>
    </div>
  </div>
  <?= $script ?>
</body>
</html>
