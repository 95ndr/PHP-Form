<?php include 'conexion.php';
	$id = $_GET['id'];
	$borrar = $conexion -> query( "DELETE FROM alumnos WHERE id = '$id' ");
	if ($borrar) {
		echo "<script> location.href='formulario.php'; </script>";

	}else{
		echo "<script> alert( 'El registro no pude ser eliminado') </script>";
	}

 ?>