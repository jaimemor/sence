<?php 
/**
 * 
 */
class Insertar
{
	
	function in_participante($IdSesionAlumno, $CodSence, $LineaCapacitacion, $CodigoCurso, $RunAlumno, $IdSesionSence){
		include "conexion.php";
		$sql="insert into participante(IdSesionAlumno,CodSence,LineaCapacitacion,CodigoCurso,RunAlumno,IdSesionSence,fecha) VALUES (?,?,?,?,?,?,?)";
        $smt=$conn->prepare($sql);
        $smt->bindparam(1,$IdSesionAlumno);
        $smt->bindparam(2,$CodSence);
        $smt->bindparam(3,$LineaCapacitacion);
        $smt->bindparam(4,$CodigoCurso);
        $smt->bindparam(5,$RunAlumno);
        $smt->bindparam(6,$IdSesionSence);
        $smt->bindparam(7,date('Y-m-d H:i:s'));
        $smt->execute();
        $conn=null;
		
	}
}




?>