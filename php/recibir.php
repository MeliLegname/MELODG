<?php
	// recibir.php
	
	// Array asociativo predetermiado de PHP
	// El índice es el atributo name del archivo anterior
	$nombre = $_POST['nombre'];
	$email  = $_POST['email'];
	$comentario  = $_POST['comentario'];

	
	echo "$nombre con email: $email quiere saber: $comentario";
	
	
?>







