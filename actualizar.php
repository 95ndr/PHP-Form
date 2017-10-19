<?php include 'conexion.php';
	$id = $_REQUEST['id'];
	$select = $conexion ->query("SELECT * FROM alumnos WHERE id ='$id' ");
	if ($fila = $select -> fetch_assoc() ) {
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>formulario de Registro</title>
	</head>
	<body>
		<fieldset>
			<label>Formulario </label>
			<form action="guardar_actualizacion.php" method="post">
				<input type="hidden" name="id" value= "<?php echo $id ?>">
				<input type="text" name="nombre" placeholder="Nombre del Alumno" value= "<?php echo $fila['nombre'] ?>"><br>
				
				<input type="text" name="paterno" placeholder="Apellido paterno" value= "<?php echo $fila['paterno'] ?>"><br>
				
				<input type="text" name="materno" placeholder="Apellido Materno" value= "<?php echo $fila['materno'] ?>"><br>
				
				<input type="submit" value="Actualizar">
				
			</form>
		</fieldset>
	</body>
</html>

