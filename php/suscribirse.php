<?php
	// agregar.php
	
	// 1º Conseguir datos del form
	$nombre2 = $_POST['nombre2'];
	$email2  = $_POST['email2'];

	
	// 2º Conectarme a la BD
	include("conexion.php");
	
	// 3º Crear la query
	// Empiezo siempre con " para que se ejecuten las variables
	$ag = "INSERT INTO newsdatos
		   VALUES(
			 '$nombre2',
			 '$email2'
		   )";
	
	// 4º Ejecutar la query
	$ej_ag = mysqli_query($conexion, $ag);
	
	// 5º Verificamos si funcionó
	if($ej_ag === true){
		echo "Funcionó";
	} else {
		echo "Error, ver SQL";
	}

?>







