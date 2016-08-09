<?php
	include("operacionclass.php");
	
	class Suma extends Operacion
	{
		public function operar()
		{
			printf("El resultado es: %d", $this->num1 + $this->num2);
		}	
		
	}// Fin class Suma


?>