<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Form Template</title>
		</head>
		<body>
			<?php
				$nombres = array('Michelle', 'Andrea', 'Darleen'); 
				function nombres()
				{
					echo $titulo = 'Michelle';
				}

				function fecha(){
					echo date('y');
				}
			 ?>
			 <ul>
			 </ul>
			<h1><?php nombres() ?></h1>
			<label>What day is today?</label>
			<h2>Today is <?php fecha() ?></h2>
			<h3><?php echo gethostname() ?></h3>
		</body>
	</html>