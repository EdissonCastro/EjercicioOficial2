<?php	
	
	function registrar_operacion( $operacion, $documento )
	{
		include("conexion.php");
		$queryRegOp = "INSERT INTO operaciones(documento, operacion_realizada) VALUES('$documento', '$operacion');";
		$result = $conexion->query($queryRegOp);
		
		if(!$result)
		{
			printf("Error en el registro: %s", $conexion->error);
		}
	}// Fin registrar_operacion
?>