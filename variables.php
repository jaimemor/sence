<?php 
//archivo de configuracion de variables para login con sence

$RutOtecV = "76900644-3";
$TokenV = "CE0B1387-001D-4FB4-8377-ECD3D66322A3";
$LineaCapacitacionV = "3";

//url inico sesion que de vuelve
$UrlRetomaV = "https://www.syc-chile.cl/sence/validador.php";
//url cierre sesion ue de vuelve
$UrlCierreV ="https://www.syc-chile.cl/sence/cierresesion.php";
// url donde envia el error
$UrlErrorV = "https://www.syc-chile.cl/sence/validador.php";


//url para iniciar sesion
$urlIN = "https://sistemas.sence.cl/rce/Registro/IniciarSesion";

//url para cerrar sesion
$urlCe = "https://sistemas.sence.cl/rce/Registro/CerrarSesion";



//errores

$arrayError = array(100 =>'Contraseña incorrecta o el usuario no tiene Clave SENCE.' ,200 => 'El POST tiene uno o más parámetros mandatorios sin información. Esto también ocurre
cuando un parámetro está mal escrito (por ejemplo, RutAlumno en lugar de
RunAlumno), o cuando se ingresan sólo espacios en blanco en un parámetro obligatorio.',201 =>'La URL de Retoma y/o URL de Error no tienen información. Ambos parámetros son
obligatorios en todos los POST.',202 =>'La URL de Retoma tiene formato incorrecto.',203 =>'La URL de Error tiene formato incorrecto.',204 =>'El Código SENCE tiene menos de 10 caracteres y/o no es código válido.',205=>'El Código Curso tiene menos de 7 caracteres y/o no es código válido.',206 => 'La línea de capacitación es incorrecta.',207 =>'El Run Alumno tiene formato incorrecto, o tiene el dígito verificador incorrecto.',208=>'El Run Alumno no está autorizado para realizar el curso.',209=>'El Rut OTEC tiene formato incorrecto, o tiene el dígito verificador incorrecto.',210=>'Expiró el tiempo disponible para el ingreso de RUT y Contraseña. El tiempo disponible es
de tres minutos.',211=>'El Token no pertenece al OTEC.',212=>'El Token no está vigente.',300=>'Error interno no clasificado, se debe reportar al SENCE con la mayor cantidad de
antecedentes disponibles.',301=>'No se pudo registrar el ingreso o cierre de sesión. Esto ocurre cuando la Línea de
Capacitación es incorrecta, o el Código de Curso es incorrecto.',302=>'No se pudo validar la información del Organismo, se debe reportar al SENCE con la
mayor cantidad de antecedentes disponibles.',303=>'El Token no existe, o su formato es incorrecto.',304=>'No se pudieron verificar los datos enviados, se debe reportar al SENCE con la mayor
cantidad de antecedentes disponibles.',305=>'No se pudo registrar la información, se debe reportar al SENCE con la mayor cantidad de
antecedentes disponibles.',306=>'El Código Curso no corresponde al Código SENCE.');




?>