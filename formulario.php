<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>formulario de Registro</title>
	</head>
	<body>
		<fieldset>
			<legend>Formulario</legend>
			<form action="guardar.php" method="post">
				<input type="text" name="nombre" placeholder="Nombre del Alumno"><br>
				<input type="text" name="paterno" placeholder="Apellido paterno"><br>
				<input type="text" name="materno" placeholder="Apellido Materno"><br>
				<input type="submit" value="Guardar">
				
			</form>
		</fieldset>
		<table>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th></th>
			<th></th>
			<!-- here we select all the data from theSS data base and save in the variable select so later we can can use his properties -->
			<?php $select = $conexion ->query("SELECT * FROM alumnos");
			// her we are looping from the data of the data base to render one by one every daty into a table.
			while ($fila = $select -> fetch_assoc()) {
			 ?>
			 <tr>
				 <td><?php echo $fila['id'] ?></td>
				 <td><?php echo $fila['nombre'] ?></td>
				 <td><?php echo $fila['paterno']?></td>
				 <td><?php echo $fila['materno']?></td>
				 <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
				 <td><a href="borrar.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
			 </tr>
			<?php }  ?> 		
		</table>
	</body>
</html>