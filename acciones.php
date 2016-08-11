<?php
	include("seguridad.php");
	
	if( !sesion_iniciada() )
	{
		header("Location:index.html");
	}
	
	switch( $_POST['opciones'] )
	{
		case "ninguna":
			header("Location:pagusuario.php");
		break;
		
		case "operar":
			header("Location:operaciones.php");
		break;
		
		case "consultar":
			header("Location:consultaroperaciones.php");
		break;	
	}// Fin Switch
?>