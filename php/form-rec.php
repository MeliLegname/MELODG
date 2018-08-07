<!doctype html>
<html>
	<head>
		<title>Formulario</title>
		<meta charset="utf-8">
	
	</head>
	<body>
		<h1>Formulario enviado con POST</h1>
		
               


		<form action="recibir.php" method="post">
			<label>
				Nombre:
				<input type="text" required>
			</label>
			
			<label for="apellido">
				Apellido:
			</label>
			<input type="text" id="apellido">
			
			<!-- No siempre se lee el placeholder, entonces agrego el atributo aria-label -->
			<input type="text" placeholder="Mascota" aria-label="Nombre de tu mascota">
			
			<input type="submit" value="Enviar">		
		</form>




















                
				
	</body>

</html>