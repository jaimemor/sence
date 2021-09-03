<?php
include 'variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="gb18030">
    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sycchileconsultores.cl</title>
  <!-- SCRIPTS JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-danger">Cerrar Sesión</h1>
        <form class="text-center" action="<?php echo $urlCe;?>" method="post" target="_blank">
  <div class="form-group " >
  <div class="form-group">
    <label for="IdSesionAlumno">Rut</label>
    <input type="text" class="form-control" id="IdSesionAlumno" placeholder="" name="IdSesionAlumno" required autofocus autocomplete="off"  minlength="5" maxlength="11" pattern="{6,11}" >
    <small  class="form-text text-muted">Ingresar rut sin guion ni puntos.</small>
  </div>
  <section id="tabla_resultado">
    
    </section>
  
</form>
      </div>
    </div>
  </div>

  <script>
    $(obtener_registros());

function obtener_registros(alumnos)
{
  $.ajax({
    url : 'bd/select.php',
    type : 'POST',
    dataType : 'html',
    data : { alumnos: alumnos },
    })

  .done(function(resultado){
    $("#tabla_resultado").html(resultado);
  })
}

$(document).on('keyup', '#IdSesionAlumno', function()
{
  var valorBusqueda=$(this).val();
  if (valorBusqueda!="")
  {
    obtener_registros(valorBusqueda);
  }
  else
    {
      obtener_registros();
    }
});

  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
</body>
</html>
