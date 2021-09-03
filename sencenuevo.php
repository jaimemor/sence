<?php 
include 'variables.php';
    $RT = $_REQUEST['RunAlumno'];
    $idalum = str_replace("-","",$RT);
   $codcurso = $_REQUEST['CodigoCurso'];
   $CodSenc = $_REQUEST['CodSence'];
if (empty($_REQUEST['RunAlumno'])){
    header("Location: https://sycchile.moodle.school");}

?>
  <html>
            <head>
                <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
                <title>Procesando...</title>
                <script type='text/javascript'>
                    function enviarForm(){
                        document.nameForm.submit();
                    }
                </script>
            </head>
            <body onLoad='javascript:enviarForm();'>
                <form name='nameForm' action='https://sistemas.sence.cl/rce/Registro/IniciarSesion' method='post'>
                    <input type='hidden' name='RunAlumno' value="<?php echo $RT; ?>">
                    <input type='hidden' name='IdSesionAlumno' value="<?php echo $idalum; ?>">
                    <input type='hidden' name='CodigoCurso' value="<?php echo $codcurso; ?>">
                    <input type='hidden' name='RutOtec' value="<?php echo $RutOtecV; ?>">
                    <input type='hidden' name='Token' value="<?php echo $TokenV; ?>">
                    <input type='hidden' name='CodSence' value="<?php echo $CodSenc;?>">
                    <input type='hidden' name='LineaCapacitacion' value="<?php echo $LineaCapacitacionV ; ?>">
                    <input type='hidden' name='UrlRetoma' value="<?php echo $UrlRetomaV;?>">
                    <input type='hidden' name='UrlError' value="<?php echo $UrlErrorV;?>">
                   
                    
                </form>
            </body>
        </html>