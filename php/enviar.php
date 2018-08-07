<?php

    $nombre = $POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$comentario = $_POST['comentario'];

	$destinatarios = "melisalegname1995@gmail.com";
	
    $cuerpo = "$nombre te envio el siguiente comentario:
    $comentario
    . Contactalo a su mail $email";
	
	$cabeceras = "from: Melisa <consultas@melodg.com>";
	
	mail($destinatarios, $asunto, $cuerpo, $cabeceras);
	mail($email, "Recibimos tu email con exito! muchas gracias por contactarnos!.Te responderemos a la brevedad", $cabeceras);
	
	echo "mensaje enviado";
	
?>