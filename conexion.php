<?php
	$conexion = new mysqli("localhost", "root", "", "db_operaciones");
	
	if( $conexion->connect_errno )
	{
		printf("Fallo en la conexión: %s", $conexion->connect_error) or die("Ingrese nuevamente");
	}	
?>