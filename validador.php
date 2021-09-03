<?php
include "bd/insertar.php";
if(empty($_REQUEST['GlosaError'])){
	if (!empty($_REQUEST['CodSence'])) {
	
	$CodSence = $_REQUEST['CodSence'];
	$IdSesionAlumno = $_REQUEST['IdSesionAlumno'];
	$LineaCapacitacion= $_REQUEST['LineaCapacitacion'];
	$CodigoCurso= $_REQUEST['CodigoCurso'];
	$RunAlumno = $_REQUEST['RunAlumno'];
	$IdSesionSence= $_REQUEST['IdSesionSence'];

	$in = new Insertar();
	$in->in_participante($IdSesionAlumno,$CodSence,$LineaCapacitacion,$CodigoCurso,$RunAlumno,$IdSesionSence);


	header("Location:validado.php");
}else{
	echo "-------";
	echo$IdSesionSence;
	
}
}else{
	
	header("Location:error.php?GlosaError=".$_REQUEST['GlosaError']);
}

?>