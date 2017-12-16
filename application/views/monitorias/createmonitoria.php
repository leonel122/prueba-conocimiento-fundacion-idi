<body>
  <div class="container">
    <?= $navbar ?>
    <div class="container">
      <h1 class="d-flex justify-content-center">Crear Monitoria</h1>
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="display:none;">
        <strong>Nuevo Monitor Creado</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form">
        <div class="form-group">
          <label for="">id</label>
          <input type="text" class="form-control" id="id_monitor" placeholder="Ingrese id" required>
        </div>
        <div class="form-group">
          <label for="">Materia</label>
          <input type="text" class="form-control" id="matter" placeholder="Ingrese Materia" required>
        </div>
        <div class="form-group">
          <label for="">Fecha</label>
          <input type="date" class="form-control" id="date" placeholder="Fecha" required>
        </div>
        <div class="form-group">
          <label for="">Salón</label>
          <input type="text" class="form-control" id="lounge" placeholder="Ingrese Salón" required>
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
        "id_monitor"  : $("#id_monitor").val(),
        "matter"      : $("#matter").val(),
        "date"        : $("#date").val(),
        "lounge"      : $("#lounge").val()
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
