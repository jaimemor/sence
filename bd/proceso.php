<?php 
include '../variables.php';
error_reporting(0);
$rt = str_replace("-","",$_REQUEST['RunAlumno']);
$resultado = new Select();
$val = $resultado->buscasesion($rt);
if (empty($val)){
    header("Location: https://sycchile.moodle.school");}





class Select 
{
	
	function buscasesion($rut)
	{
		require "conexion.php";
		$sql ="select * from participante WHERE IdSesionAlumno =$rut";
        $smt=$conn->prepare($sql);
        $smt->execute();
        $resultado= $smt->fetchall();
        $conn=null;
        
     

        return $resultado;
		
	}
}
?>
<html>
            <head>
                <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
                <title>Procesando...</title>
                <script type='text/javascript'>
                    function enviarFormu(){
                        document.nameFormu.submit();
                    }
                </script>
            </head>
            <body onLoad='javascript:enviarFormu();'>
                <form name='nameFormu' action='https://sistemas.sence.cl/rce/Registro/CerrarSesion' method='post'>
                    <input type='hidden' name='RunAlumno' value="<?php echo $val[0]['RunAlumno']; ?>">
                    <input type='hidden' name='IdSesionAlumno' value="<?php echo $idalum; ?>">
                    <input type='hidden' name='CodigoCurso' value="<?php echo $val[0]['CodigoCurso'] ?>">
                    <input type='hidden' name='RutOtec' value="<?php echo $RutOtecV; ?>">
                    <input type='hidden' name='Token' value="<?php echo $TokenV; ?>">
                    <input type='hidden' name='CodSence' value="<?php echo $val[0]['CodSence'];?>">
                    <input type='hidden' name='LineaCapacitacion' value="<?php echo $val[0]['LineaCapacitacion']; ?>">
                    <input type='hidden' name='UrlRetoma' value="<?php echo $UrlCierreV;?>">
                    <input type='hidden' name='UrlError' value="<?php echo $UrlCierreV;?>">
                    <input type='hidden' name='IdSesionSence' value="<?php echo $val[0]['IdSesionSence'];?>">
                   
                    
                </form>
            </body>
        </html>