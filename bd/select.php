<?php 
include '../variables.php';
error_reporting(0);
$resultado = new Select();
$val = $resultado->buscasesion($_POST['alumnos']);
if(!empty($val)){
	
	
	echo '<input type="hidden"  name="RutOtec" value="'.$RutOtecV.'">';
	echo '<input type="hidden"  name="Token" value="'.$TokenV.'">';
	echo '<input type="hidden"  name="CodSence" value="'.$val[0]['CodSence'].'">';
	echo '<input type="hidden"  name="CodigoCurso" value="'.$val[0]['CodigoCurso'].'">';
	echo '<input type="hidden"  name="LineaCapacitacion" value="'.$val[0]['LineaCapacitacion'].'">';
	echo '<input type="hidden"  name="RunAlumno"  value="'.$val[0]['RunAlumno'].'">';
	echo '<input type="hidden"  name="IdSesionSence" value="'.$val[0]['IdSesionSence'].'">';
	echo '<input type="hidden"  name="UrlRetoma" value="'.$UrlCierreV.'">';
	echo '<input type="hidden"  name="UrlError" value="'.$UrlCierreV.'">';
	echo '<button type="submit" class="btn btn-danger ">Cerrar Sesión</button>';
}



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