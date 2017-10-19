<?php // aca estamos reutilizando la conexion con include y luego
//estamos trayendo las variables del formulario.php por el metodo post que sirve para enviar variables de un lado a otro y insertandolas a la base de datos
include 'conexion.php';
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$insertar = $conexion -> query("INSERT INTO alumnos (id,nombre,paterno,materno ) VALUES ('','$nombre','$paterno','$materno')");
if($insertar){
	echo "<script> location.href='formulario.php' </script>";
}else{
	echo "<script> alert('No se pudo guardar el registro') </script>";
}
 ?>