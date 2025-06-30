<?php  
	session_start();
	include './php/directorios/directorios.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<link rel="icon" href="img/favicon.png">
	<title>UNIPOS</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<div class="contenedor_principal">
		<div class="contenedor_formulario">
			<img src="img/logo/logo.png" alt="Logo" class="imagen_logo">
			<form action="" method="POST" class="form">
				<label for="codigo" class="label">
					<input  type="password" class="codigo_input" placeholder="Codigo de Acceso">
				</label>
				<input type="submit" value="Acceder" class="boton">
			</form>
		</div>
	</div>
</body>
</html>