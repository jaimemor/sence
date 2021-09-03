<?php 
/**
 * 
 */
class Eliminar
{
	
	function eliminarsesion($rut, $idsession)
	{ 	
		include "conexion.php";
		$sql ="DELETE FROM participante WHERE IdSesionAlumno =:rut AND RunAlumno = :id ";
        $smt=$conn->prepare($sql);
        $smt->bindParam(':rut',$rut);
        $smt->bindParam(':id',$idsession);
        $smt->execute();
        $conn=null;
		
	}
}



?>