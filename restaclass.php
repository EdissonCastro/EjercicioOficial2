<?php
	include("operacionclass.php");
	
	class Resta extends Operacion
	{
		public function operar()
		{
			printf("El resultado es: %d", $this->num1 - $this->num2);
		}	
		
	}// Fin class Resta


?>