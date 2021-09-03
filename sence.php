<?php
include 'variables.php';
  if (!empty($_GET['CodSence']) && !empty($_GET['CodigoCurso'])){
    $CodSence = $_GET['CodSence'];
    $listacur = explode(',', $_GET['CodigoCurso']);
    $can =count($listacur);
  }else{
  header("Location: index.php");}


?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="gb18030">
    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sycchileconsultores.cl</title>


  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-primary">Inicio Sesión</h1>
        <form class="text-center" action="<?php echo $urlIN; ?>" method="post" target="_blank">
  <div class="form-group ">
    <label for="Rut">Rut</label>
    <input type="text" class="form-control" id="Rut" aria-describedby="emailHelp" required oninput="checkRut(this)" name="RunAlumno" autofocus autocomplete="off"  minlength="9" maxlength="10"  pattern="\d{3,8}-[\d|kK]{1}">
    <small id="emailHelp" class="form-text text-muted">Ingresar rut con guion y sin puntos.</small>
                    <script src="val.js"></script>

  </div>
  <div class="form-group">
    <label for="IdSesionAlumno">ID Alumno</label>
    <input type="text" class="form-control" id="IdSesionAlumno" placeholder="" name="IdSesionAlumno" required autofocus autocomplete="off"  minlength="8" maxlength="9" pattern="{8,11}" >
    <small  class="form-text text-muted">Ingresar rut sin guion ni puntos.</small>
  </div>

  <div class="form-group">
      <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Grupo</label>
     </div>
  <select class="custom-select" id="inputGroupSelect01" name="CodigoCurso" >

    <?php 
        for ($i=0; $i < $can ; $i++) { 
          $e = $i +1;
          echo '<option value="'.$listacur[$i].'">'.$e.'</option>';
        }
    ?>
   
  </select>
</div>
  </div>
  <p><input type="hidden" name="RutOtec" value="<?php echo $RutOtecV;?>"></p>
  <p><input type="hidden"  name="Token" value="<?php echo $TokenV;?>"></p>
  <p><input type="hidden"  name="CodSence" value="<?php echo $CodSence;?>"></p>
  
  <p><input type="hidden"  name="LineaCapacitacion" value="<?php echo $LineaCapacitacionV ; ?>"></p>
  <p><input type="hidden"  name="UrlRetoma" value="<?php echo $UrlRetomaV;?>"></p>
    <p><input type="hidden"  name="UrlError" value="<?php echo $UrlErrorV;?>"></p>
    <div class="form-group text-center">
  <button type="submit" class="btn btn-primary ">Iniciar Sesión</button>
</div>
</form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
</body>
</html>