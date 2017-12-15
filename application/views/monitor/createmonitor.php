<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <h1 class="d-flex justify-content-center">Crear Monitor</h1>
      <form id="form">
        <div class="form-group">
          <label for="">Nombres</label>
          <input type="text" class="form-control" id="firsts_names" placeholder="Ingrese Nombres">
        </div>
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id="last_name" placeholder="Ingrese Apellidos">
        </div>
        <div class="form-group">
          <label for="">Programa Academico</label>
          <input type="text" class="form-control" id="academic_program" placeholder="Ingrese Programa Academico">
        </div>
        <div class="form-group">
          <label for="">Semestre</label>
          <input type="text" class="form-control" id="semester" placeholder="Ingrese Semestre">
        </div>
        <div class="form-group">
          <label for="">Identificación</label>
          <input type="text" class="form-control" id="identification_card" placeholder="Ingrese identificación">
        </div>
        <div class="form-group">
          <label for="">Correo</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese Correo">
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" class="form-control" id="phone" placeholder="Ingrese Telefono">
        </div>
        <button type="button" id="btn-send" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <?= $script ?>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#btn-send").click(function() {
      var url = "/create";
      $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(),
           success: function(data)
           {
             console.log("asdfd");
           }
       });
    });
  });
  </script>
</body>
</html>
