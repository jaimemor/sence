<?php 
$RT= $_REQUEST['RunAlumno'];
 $idalum = $_REQUEST['IdSesionAlumno'];
$codcurso= $_REQUEST['CodigoCurso'];
$RutOtecV= $_REQUEST['RutOtec'];
$TokenV= $_REQUEST['Token'];
$CodSenc = $_REQUEST['CodSence'];
$LineaCapacitacionV = $_REQUEST['LineaCapacitacion'] ;
$UrlRetomaV=$_REQUEST['UrlRetoma'];
$UrlErrorV= $_REQUEST['UrlError'];

echo "rut".$RT;
echo "idalu".$idalum;
echo "codcur".$codcurso; 
echo "rtO".$RutOtecV;
echo "token".$TokenV;
echo "codsenc".$CodSenc;
echo $LineaCapacitacionV ;
echo $UrlRetomaV;
echo $UrlErrorV;

?>