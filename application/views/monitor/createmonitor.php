<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <h1 class="d-flex justify-content-center">Crear Monitor</h1>
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="display:none;">
        <strong>Nuevo Monitor Creado</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form">
        <div class="form-group">
          <label for="">Nombres</label>
          <input type="text" class="form-control" id="firsts_names" placeholder="Ingrese Nombres" required>
        </div>
        <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" class="form-control" id="last_name" placeholder="Ingrese Apellidos" required>
        </div>
        <div class="form-group">
          <label for="">Programa Academico</label>
          <input type="text" class="form-control" id="academic_program" placeholder="Ingrese Programa Academico" required>
        </div>
        <div class="form-group">
          <label for="">Semestre</label>
          <input type="text" class="form-control" id="semester" placeholder="Ingrese Semestre" required>
        </div>
        <div class="form-group">
          <label for="">Identificación</label>
          <input type="text" class="form-control" id="identification_card" placeholder="Ingrese identificación" required>
        </div>
        <div class="form-group">
          <label for="">Correo</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese Correo" required>
        </div>
        <div class="form-group">
          <label for="">Telefono</label>
          <input type="text" class="form-control" id="phone" placeholder="Ingrese Telefono" required>
        </div>
        <input type="button" id="btn-send" class="btn btn-primary" value="Enviar">
      </form>
    </div>
  </div>
  <?= $script ?>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#btn-send").click(function() {
      var params = {
        "firsts_names"        : $("#firsts_names").val(),
        "last_name"           : $("#last_name").val(),
        "academic_program"    : $("#academic_program").val(),
        "semester"            : $("#semester").val(),
        "identification_card" : $("#identification_card").val(),
        "email"               : $("#email").val(),
        "phone"               : $("#phone").val()
      };
      $.ajax({
           type: "POST",
           url: "create",
           data: params,
           success: function(data)
           {
             if (data) {
               $(".alert").css({ 'display' : 'block'});
             }
           }
       });
    });
  });
  </script>
</body>
</html>
